<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Invoice;

class InvoiceController extends Controller
{

    public function apiList(){
        return Invoice::own()->get();
    }

}
