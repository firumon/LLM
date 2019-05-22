<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\OrderItemService;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderItemServiceUpdating
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderItemService;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderItemService $orderItemService)
    {
        $this->orderItemService = $orderItemService;
    }

}
