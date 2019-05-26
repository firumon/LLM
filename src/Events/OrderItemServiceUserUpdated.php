<?php

namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\SetOrderItemServiceUserAttributes;
use Firumon\LLM\Jobs\UpdateCompleteProgressOfOrderItem;
use Firumon\LLM\Jobs\UpdateOrderItemServiceUserTotal;
use Firumon\LLM\Model\OrderItemServiceUser;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderItemServiceUserUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderItemServiceUser;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct(OrderItemServiceUser $orderItemServiceUser)
    {
        if($orderItemServiceUser->wasChanged(['end_at','start_at'])) {
            if($orderItemServiceUser->wasChanged(['end_at']))
                UpdateOrderItemServiceUserTotal::dispatch($orderItemServiceUser->id);
            if($orderItemServiceUser->wasChanged(['start_at']))
                SetOrderItemServiceUserAttributes::dispatch($orderItemServiceUser->id,request()->user()->id);
            UpdateCompleteProgressOfOrderItem::dispatch($orderItemServiceUser->OIS->oi);
        }
    }
}
