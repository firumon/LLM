<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderUpdating;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateItemsHubIfNull implements ShouldQueue
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
    public function handle(OrderUpdating $event)
    {
        if($event->order_id && $event->order->isDirty('hub')){
            $newHub = $event->order->hub;
            $event->order->Items()->whereNull('hub')->each(function($orderItem)use($newHub){
                $orderItem->hub = $newHub; $orderItem->save();
            });
        }
    }
}
