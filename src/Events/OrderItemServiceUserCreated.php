<?php

namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\SetOrderItemServiceUserAttributes;
use Firumon\LLM\Jobs\UpdateCompleteProgressOfOrderItem;
use Firumon\LLM\Model\OrderItemServiceUser;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderItemServiceUserCreated
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
        SetOrderItemServiceUserAttributes::dispatch($orderItemServiceUser->id,request()->user()->id)->delay(now()->addSeconds(2));
        UpdateCompleteProgressOfOrderItem::dispatch($orderItemServiceUser->OIS->oi)->delay(now()->addSeconds(3));
    }

}
