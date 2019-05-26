<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\InactivateOrderInvoice;
use Firumon\LLM\Jobs\UpdateInvoiceItemsPrice;
use Firumon\LLM\Jobs\UpdateOrderItemsHubForHavingHubAsNull;
use Firumon\LLM\Jobs\UpdateOrderItemsHubForHavingProgressAsNew;
use Firumon\LLM\Model\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderUpdating
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
        if($order->isDirty('pl')) UpdateInvoiceItemsPrice::dispatch($order->id,$order->pl)->delay(now()->addSeconds(2));
        if($order->isDirty('status') && $order->status == 'Inactive') InactivateOrderInvoice::dispatch($order->id)->delay(now()->addSeconds(2));
        if($order->isDirty('hub')){
            UpdateOrderItemsHubForHavingHubAsNull::dispatch($order->id,$order->hub)->delay(now()->addSeconds(2));
            UpdateOrderItemsHubForHavingProgressAsNew::dispatch($order->id,$order->hub)->delay(now()->addSeconds(2));
        }
    }

}
