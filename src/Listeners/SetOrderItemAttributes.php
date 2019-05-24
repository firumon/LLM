<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderItemCreated;
use Firumon\LLM\Model\LLMUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Arr;

class SetOrderItemAttributes implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderItemCreated $event)
    {
        $event->orderItem->hub = $event->orderItem->Order->hub;
    }
}
