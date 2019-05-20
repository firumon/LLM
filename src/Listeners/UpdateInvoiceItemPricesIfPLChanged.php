<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderUpdating;
use Firumon\LLM\Model\Order;
use Firumon\LLM\Model\Pricelist;
use Illuminate\Support\Arr;

class UpdateInvoiceItemPricesIfPLChanged
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
    public function handle(OrderUpdating $event)
    {
        if($event->order_id && $event->order->isDirty('pl')){
            $order = Order::with(['Invoice.Items'])->find($event->order_id);
            if($order->Invoice){
                $newPLContents = Pricelist::with(['Contents.ItemService'])->find($event->pl)->Contents->groupBy([function($plc){ return $plc->ItemService->item; },function($plc){ return $plc->ItemService->service; }]);
                $order->Invoice->Items->each(function($invItem)use($newPLContents){
                    $item = $invItem->item; $service = $invItem->service;
                    $price = Arr::get($newPLContents,implode('.',[$item,$service,0,'price']),0);
                    $invItem->price = $price; $invItem->save();
                });
            }
        }
        if($event->order->status == 'Inactive'){
            $event->order->invoice->status = 'Inactive';
            $event->order->push();
        }
    }
}
