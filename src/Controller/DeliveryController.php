<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Delivery;

class DeliveryController extends Controller
{

    public function getBalanceReceiptAmount($form_id,$field_id,$data){
        $invoice = Invoice::with(['Items','Receipts'])->find($data['invoice']);
        $balance = $invoice->Items->sum('price') - $invoice->Receipts->sum('amount');
        $this->setDependValue($form_id,'amount',$balance);
    }

    public function apiList(){
        return Delivery::own()->get();
    }


}
