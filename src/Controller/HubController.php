<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Hub;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HubController extends Controller
{

    public function apiList(){
        return Hub::whereStatus('Active')->get();
    }

    public function apiDetail($id){
        return Hub::with(['Users.Groups','Services'])->find($id);
    }

    public function apiAuthenticate(Request $request){
        $hub = Hub::where(['status' => 'Active', 'id' => $request->hub, 'pin' => $request->pin])->first();
        return ['success' => !!$hub, 'uuid' => $hub ? $hub->url : null];
    }

    public function apiProviders(Request $request){
        $hub = Hub::with(['Users' => function($q){ $q->whereHas('Groups',function($Q){ $Q->where('name','service_providers'); }); }])->where(['url' => $request->uuid])->first();
        return Arr::get($hub,'Users');
    }

}
