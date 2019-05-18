<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\OrderItem;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderItemCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderItem, $request;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderItem $orderItem)
    {
        $this->orderItem = $orderItem;
        $this->request = request()->toArray();
    }

}
