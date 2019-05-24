<?php

namespace Firumon\LLM\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Firumon\LLM\Events\LLMUserCreated;
use Milestone\Appframe\Model\Group;
use Milestone\Appframe\Model\User;

class AddUserToGroups implements ShouldQueue
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
    public function handle($event)
    {
        $event->User->Groups()->attach(Group::whereIn('name',$event->Groups)->pluck('id'));
    }
}
