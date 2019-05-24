<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\HubShiftUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateShiftItemsHub implements ShouldQueue
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
    public function handle(HubShiftUpdated $event)
    {
        $targetHub = $event->hubShift->status === 'Active' ? $event->hubShift->destination_hub : $event->hubShift->source_hub;
        $event->hubShift->Items->each(function($hubShiftItem)use($targetHub){
            $hubShiftItem->Item->hub = $targetHub;
            $hubShiftItem->Item->shelf = null;
            $hubShiftItem->Item->save();
        });
    }
}
