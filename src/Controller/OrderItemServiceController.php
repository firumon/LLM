<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Hub;
use Firumon\LLM\Model\OrderItemService;
use Firumon\LLM\Model\OrderItemServiceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class OrderItemServiceController extends Controller
{
    public function apiJobs(Request $request)
    {
        $hub = Arr::get(Hub::where(['url' => $request->uuid])->first(),'id',null);
        if(!$hub) return null;
        return OrderItemService::whereIn('progress',['New','Assigned','Processing','Awaiting'])
            ->with(['Assigned'])->where('status','Active')
            ->whereHas('OrderItem',function($Q)use($hub){ $Q->where('hub',$hub); })
            ->get();
    }

    public function apiAdvance(Request $request){
        $ois = $request->ois; Auth::loginUsingId($request->user);
        $OISU = OrderItemServiceUser::where('ois',$ois)->first();
        if($OISU){
            if(!$OISU->start_at) $OISU->start_at = time();
            elseif(!$OISU->end_at) $OISU->end_at = time();
            $OISU->save();
            return $OISU;
        }
        return [];
    }
}
