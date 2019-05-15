<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\OrderItem;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Arr;

class OrderItemSaving
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderItem = null, $order_id = null, $order_pl = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderItem $orderItem)
    {

    }

}
