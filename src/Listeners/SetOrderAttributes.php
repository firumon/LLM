<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderCreating;
use Firumon\LLM\Model\LLMUser;
use Illuminate\Support\Arr;

class SetOrderAttributes
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
    public function handle(OrderCreating $event)
    {
        $order = $event->order;
        if(!$event->order_id){
            $event->order->setAttribute('user',request()->user()->id);
            $event->order->setAttribute('hub',Arr::get(LLMUser::find(request()->user()->id)->Hubs,'0.id',null));
            $event->order->setAttribute('date',Arr::get($order,'date',now()->toDateString()));
        }

    }
}
