<?php

namespace Firumon\LLM\Events;

use Firumon\LLM\Model\OrderItemServiceUser;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderItemServiceUserCreating
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderItemServiceUser, $requestUser;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderItemServiceUser $orderItemServiceUser)
    {
        $this->orderItemServiceUser = $orderItemServiceUser;
        $this->requestUser = request()->user()->id;
    }

}
