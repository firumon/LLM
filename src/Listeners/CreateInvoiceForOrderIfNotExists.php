<?php

    namespace Firumon\LLM\Listeners;

    use Firumon\LLM\Events\OrderCreated;
    use Firumon\LLM\Model\Invoice;
    use Firumon\LLM\Model\InvoiceItem;
    use Firumon\LLM\Model\Pricelist;
    use Illuminate\Support\Arr;

    class CreateInvoiceForOrderIfNotExists
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
         * @param object $event
         * @return void
         */
        public function handle(OrderCreated $event)
        {
            $orderInvoice = $event->order->Invoice;
            if ($orderInvoice) return;
            $order = $event->order;
            $invoice = $this->createInvoice(array_combine(['customer', 'date', 'order'], [$event->customer, $order->date, $order->id]));
            $this->createInvoiceItemsFromRequest($invoice);
        }

        private function createInvoice($args){
            $invoice = New Invoice();
            foreach ($args as $key => $val) $invoice->$key = $val;
            $invoice->save();
            return $invoice;
        }
        private function createInvoiceItemsFromRequest($invoice){
            $items = request()->data['items']; if(empty($items)) return;
            $plContents = $this->getGroupedPLContents(request()->get('data')['pl']);
            foreach ($items as $ISArray){
                $item = $ISArray['item']; $services = $ISArray['service'];
                if(!empty($services)) foreach ($services as $service){
                    $price = Arr::get($plContents,join('.',[$item,$service,0,'price']),0);
                    $this->createInvoiceItem($invoice,compact('item','service','price'));
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
