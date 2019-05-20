<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderItemServiceUserCreating;

class SetOrderItemServiceUserAttributes
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
    public function handle(OrderItemServiceUserCreating $event)
    {
        $event->orderItemServiceUser->setAttribute('assigned_by',$event->requestUser);
        $event->orderItemServiceUser->setAttribute('assigned_on',time());
    }
}
