<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\AddDeliveryItems;
use Firumon\LLM\Jobs\DetachLabels;
use Firumon\LLM\Jobs\SetDeliveryAttributes;
use Firumon\LLM\Model\Delivery;
use Firumon\LLM\Model\LLMUser;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Support\Arr;

class DeliveryCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order = null, $customer = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Delivery $delivery)
    {
        SetDeliveryAttributes::dispatch($delivery,request()->user()->id,Arr::get(LLMUser::find(request()->user()->id)->Hubs,'0.id',null));
        AddDeliveryItems::dispatch($delivery->id,request()->get('data')['oi']);
        DetachLabels::dispatch($delivery->fresh()->hub,request()->get('data')['oi']);
    }

}
