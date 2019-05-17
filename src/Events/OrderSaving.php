<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Support\Arr;

class OrderSaving
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order = null, $order_id = null, $order_pl = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->order_id = Arr::get($order,'id',null);
        $this->order_pl = Arr::get($order,'pl',null);
    }

}
