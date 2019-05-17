<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderSaving;
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
    public function handle(OrderSaving $event)
    {
        if($event->order_id && $event->order->isDirty('pl')){
            $order = Order::with(['Invoice.Items'])->find($event->order_id);
            if($order->Invoice){
                $newPLContents = Pricelist::with(['Contents.ItemService'])->find($event->order->pl)->Contents->groupBy([function($plc){ return $plc->ItemService->item; },function($plc){ return $plc->ItemService->service; }]);
                $order->Invoice->Items->each(function($invItem)use($newPLContents){
                    $item = $invItem->item; $service = $invItem->service;
                    $price = Arr::get($newPLContents,implode('.',[$item,$service,0,'price']),0);
                    $invItem->price = $price; $invItem->save();
                });
            }
        }

    }
}
