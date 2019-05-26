<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\CreateInvoiceForOrderIfNotExists;
use Firumon\LLM\Jobs\SetOrderAttributes;
use Firumon\LLM\Model\LLMUser;
use Firumon\LLM\Model\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Support\Arr;

class OrderCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order = null, $customer = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        SetOrderAttributes::dispatch($order,request()->user()->id,Arr::get(LLMUser::find(request()->user()->id)->Hubs,'0.id',null));
        CreateInvoiceForOrderIfNotExists::dispatch($order,Arr::get($order,'customer',null),request('data'));
    }

}
