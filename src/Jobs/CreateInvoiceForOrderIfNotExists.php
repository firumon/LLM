<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\Invoice;
use Firumon\LLM\Model\InvoiceItem;
use Firumon\LLM\Model\Pricelist;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Arr;

class CreateInvoiceForOrderIfNotExists implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $order, $customer, $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order,$customer,$data)
    {
        $this->order = $order;
        $this->customer = $customer ?? Arr::get($order,'customer',null);
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $orderInvoice = $this->order->Invoice;
        if ($orderInvoice) return;
        $order = $this->order;
        $invoice = $this->createInvoice(array_combine(['customer', 'date', 'order'], [$this->customer, $order->date, $order->id]));
        $this->createInvoiceItemsFromData($invoice);
    }


    private function createInvoice($args){
        $invoice = New Invoice();
        foreach ($args as $key => $val) $invoice->$key = $val;
        $invoice->save();
        return $invoice;
    }
    private function createInvoiceItemsFromData($invoice){
        $items = $this->data['items']; if(empty($items)) return;
        $plContents = $this->getGroupedPLContents($this->data['pl']);
        foreach ($items as $ISArray){
            $item = $ISArray['item']; $services = $ISArray['service']; $quantity = $ISArray['quantity'] ?: 1;
            if(!empty($services)) foreach ($services as $service){
                $price = Arr::get($plContents,join('.',[$item,$service,0,'price']),0);
                $this->createInvoiceItem($invoice,compact('item','service','price','quantity'));
            }
        }
    }
    private function getGroupedPLContents($PLId){
        $pl = Pricelist::with(['Contents.ItemService'])->find($PLId);
        $contents = ($pl)
            ? $pl->Contents->groupBy([function($plc){ return $plc->ItemService->item; },function($plc){ return $plc->ItemService->service; }])
            : collect([]);
        return $contents;
    }
    private function createInvoiceItem($invoice,$args){
        $invoiceItem = new InvoiceItem();
        foreach ($args as $key => $val) $invoiceItem->$key = $val;
        $invoice->Items()->save($invoiceItem);
    }

}
