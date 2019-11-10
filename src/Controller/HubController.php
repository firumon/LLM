<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Hub;

class HubController extends Controller
{

    public function apiList(){
        return Hub::whereStatus('Active')->get();
    }

    public function apiDetail($id){
        return Hub::with(['Users.Groups','Services'])->find($id);
    }

}
