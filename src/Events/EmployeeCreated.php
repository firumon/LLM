<?php

namespace Firumon\LLM\Events;

use Milestone\Appframe\Model\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class EmployeeCreated
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
        $this->Groups = ['employees','llm_users'];
    }

}
