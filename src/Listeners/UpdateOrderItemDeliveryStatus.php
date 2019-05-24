<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderItemUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateOrderItemDeliveryStatus implements ShouldQueue
{
    private $progress = 'Delivered';
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
    public function handle(OrderItemUpdated $event)
    {
        $OI = $event->orderItem;
        if(!$OI->wasChanged(['hub','progress']) || $OI->progress !== 'Service Completed' || !$OI->hub) return;
        $OIHub = $OI->hub; $OHub = $OI->Order->hub ;
        if($OIHub != $OHub) return;
        $event->orderItem->progress = $this->progress;
        $event->orderItem->save();
        if($OI->Order->Items()->where('progress','!=',$this->progress)->exists()) return;
        $OI->Order->progress = $this->progress;
        $OI->push();
    }
}
