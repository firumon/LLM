<?php

    namespace Firumon\LLM\Listeners;

    use Firumon\LLM\Events\OrderItemServiceUserCreated;
    use Firumon\LLM\Events\OrderItemServiceUserUpdated;

    class OISUSetAttributeAndUpdateProgress
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
            if($OISU->getOriginal('end_at') > 0) { $this->updateTotals($OISU); event(new OrderItemServiceUserCreated($OISU)); }
            elseif($OISU->getOriginal('start_at') > 0) { event(new OrderItemServiceUserCreated($OISU)); }
        }

        private function updateTotals($OISU){
            $end_at = $OISU->getOriginal('end_at'); $start_at = $OISU->getOriginal('start_at'); $assigned_on = $OISU->getOriginal('assigned_on');
            $service_total = $end_at - $start_at; $service_total = ($service_total < 0) ? 0 : $service_total;
            $total = $end_at - $assigned_on; $total = ($total < 0) ? 0 : $total;
            $OISU->service_total = $service_total; $OISU->total = $total;
            $OISU->save();
        }
    }
