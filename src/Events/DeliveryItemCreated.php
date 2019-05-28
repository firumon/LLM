<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\DetachLabel;
use Firumon\LLM\Model\DeliveryItem;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class DeliveryItemCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order = null, $customer = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(DeliveryItem $deliveryItem)
    {
        DetachLabel::dispatch($deliveryItem->oi);
    }

}
