<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderSaved;
use Firumon\LLM\Model\Invoice;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateInvoiceForOrder
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
    public function handle(OrderSaved $event)
    {
        $orderInvoice = $event->order->Invoice;
        if($orderInvoice) return;
        $args = array_combine(['customer','date','order'],[$event->customer,$event->date,$event->order->id]);
        $invoice = New Invoice();
        foreach ($args as $key => $val)
            $invoice->$key = $val;
        $invoice->save();
    }
}
