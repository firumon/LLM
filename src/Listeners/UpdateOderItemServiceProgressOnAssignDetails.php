<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\OrderItemServiceUpdating;
use Firumon\LLM\Events\OrderItemServiceUserCreated;
use Illuminate\Support\Carbon;

class UpdateOderItemServiceProgressOnAssignDetails
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
    public function handle(OrderItemServiceUpdating $event)
    {
        $dirty = $event->orderItemService->getDirty();
        if(!empty($dirty) && count($dirty) === 1 && array_key_exists('updated_at',$dirty)){
            $assigners = $event->orderItemService->Assigned;
            if($assigners->isEmpty()) $this->setOISProgressToNew($event->orderItemService);
            else {
                $requester = request()->user()->id;
                $assigners->each(function($oisu)use($requester){
                    $oisu->assigned_by = $requester; $oisu->assigned_on = Carbon::now()->timestamp;
                    $oisu->save(); event(new OrderItemServiceUserCreated($oisu));
                });
            }
        }
    }

    private function setOISProgressToNew($ois){
        $ois->progress = 'New'; $ois->save();
        $nonNewOises = $ois->OrderItem->OIS->where('progress','!=','New');
        if($nonNewOises->isEmpty()) $this->setOIProgressToNew($ois->OrderItem);
    }
    private function setOIProgressToNew($oi){
        $oi->progress = 'New'; $oi->save();
        $nonNewOies = $oi->Order->Items->where('progress','!=','New');
        if($nonNewOies->isEmpty()) $this->setOrderProgressToNew($oi->Order);
    }
    private function setOrderProgressToNew($order){
        $order->progress = 'New'; $order->save();
    }
}
