<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\Order;
use Firumon\LLM\Model\Pricelist;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Arr;

class UpdateInvoiceItemsPrice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $order, $pl_contents;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order_id,$pl_id)
    {
        $this->order = Order::with(['Invoice.Items'])->find($order_id);
        $this->pl_contents = Pricelist::find($pl_id)->Contents->groupBy([function($plc){ return $plc->ItemService->item; },function($plc){ return $plc->ItemService->service; }]);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pl_contents = $this->pl_contents;
        $this->order->Invoice->Items->each(function($invItem)use($pl_contents){
            $item = $invItem->item; $service = $invItem->service;
            $price = Arr::get($pl_contents,implode('.',[$item,$service,0,'price']),0);
            $invItem->price = $price; $invItem->save();
        });
    }
}
