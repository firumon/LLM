<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Order;

class OrderController extends Controller
{

    public function apiList(){
        return Order::ownHub()->get();
    }

}
