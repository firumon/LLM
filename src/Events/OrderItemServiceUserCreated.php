<?php

namespace Firumon\LLM\Events;

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
        $this->orderItemServiceUser = $orderItemServiceUser->load('OIS.OrderItem.Order');
    }

}
