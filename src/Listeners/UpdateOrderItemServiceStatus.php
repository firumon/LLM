<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Model\OrderItemServiceUser;

class UpdateOrderItemServiceStatus
{
    private $progressMap = [
        'New' => ['New','New'],
        'Assigned' => ['In Service','In Service'],
        'Processing' => ['In Service','In Service'],
        'Completed' => ['Service Completed','Service Completed'],
        'Awaiting' => ['New','New']
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $orderItemServiceUser = $event->orderItemServiceUser;
        if($orderItemServiceUser->end_at > 0){
            $progress = ($orderItemServiceUser->OIS->Assigned->every(function ($oisu) {
                return ($oisu->end_at > 0);
            })) ? 'Completed' : 'Processing';
        }
        elseif($orderItemServiceUser->start_at > 0) $progress = 'Processing';
        elseif($orderItemServiceUser->assigned_on > 0) $progress = 'Assigned';
        else $progress = 'New';

        $event->orderItemServiceUser->OIS->progress = $progress;
        $event->orderItemServiceUser->OIS->OrderItem->progress = $this->progressMap[$progress][0];
        $event->orderItemServiceUser->OIS->OrderItem->Order->progress = $this->progressMap[$progress][1];
        $event->orderItemServiceUser->push();
    }
}
