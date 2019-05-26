<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\SetItemHubAsItsOrderHub;
use Firumon\LLM\Jobs\UpdateLabelCurrentItem;
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
        SetItemHubAsItsOrderHub::dispatch($orderItem);
        if($orderItem->label) UpdateLabelCurrentItem::dispatch($orderItem->label,$orderItem->id);
    }

}
