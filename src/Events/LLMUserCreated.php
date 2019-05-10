<?php

namespace Firumon\LLM\Events;

use Milestone\Appframe\Model\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LLMUserCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $User, $Groups;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $User)
    {
        $this->User = $User;
        $this->Groups = ['llm_users'];
    }

}
