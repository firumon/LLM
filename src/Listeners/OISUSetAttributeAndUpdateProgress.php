<?php

    namespace Firumon\LLM\Listeners;

    use Firumon\LLM\Events\OrderItemServiceUserCreated;
    use Firumon\LLM\Events\OrderItemServiceUserUpdated;
    use Illuminate\Contracts\Queue\ShouldQueue;

    class OISUSetAttributeAndUpdateProgress implements ShouldQueue
    {
        private $progressMap = [
            'New' => ['New', 'New'],
            'Assigned' => ['In Service', 'In Service'],
            'Processing' => ['In Service', 'In Service'],
            'Completed' => ['Service Completed', 'Service Completed'],
            'Awaiting' => ['New', 'New']
        ];

        /**
         * Create the event listener.
         *
         * @return void
         */
        public function __construct()
        {
        }

        /**
         * Handle the event.
         *
         * @param object $event
         * @return void
         */
        public function handle(OrderItemServiceUserUpdated $event)
        {
            $OISU = $event->orderItemServiceUser;
            if($OISU->wasChanged(['end_at'])) { $this->updateTotals($OISU->fresh()); event(new OrderItemServiceUserCreated($OISU)); }
            elseif($OISU->wasChanged(['start_at']) ) {
                event(new OrderItemServiceUserCreated($OISU));
            }
        }

        private function updateTotals($OISU){
            list($assigned_on,$start_at,$end_at) = [$OISU->getOriginal('assigned_on'),$OISU->getOriginal('start_at'),$OISU->getOriginal('end_at')];
            $service_total = $end_at - $start_at; $service_total = ($service_total < 0) ? 0 : $service_total;
            $total = $end_at - $assigned_on; $total = ($total < 0) ? 0 : $total;
            $OISU->service_time = $service_total; $OISU->total_time = $total;
            $OISU->save();
        }
    }
