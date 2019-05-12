<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\NewDefaultShelf;
use Firumon\LLM\Model\HubDefaultShelf;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteAllDefaultShelfOfAHub
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewDefaultShelf $event)
    {
        HubDefaultShelf::where('hub',$event->hub)->delete();
    }
}
