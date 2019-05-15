<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Arr;

class OrderSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order = null, $customer = null, $date = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->customer = Arr::get($order,'customer',null);
        $this->date = Arr::get($order,'date', date('Y-m-d'));
    }

}
