<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateCompleteProgressOfOrderItem implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $oi;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($oi)
    {
        $this->oi = OrderItem::with(['OIS.Assigned','Order.Items','Delivery'])->find($oi);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $oi = $this->oi;
        if($oi->OIS->isEmpty()) return;
        $this->updateOISProgress($oi->OIS);
        $this->updateOIProgress($oi->Order->Items);
        $this->updateOProgress($oi->Order);
    }

    private function updateOISProgress($OIS){
        $OIS->each(function($ois){
            $progress = ($ois->Assigned->isEmpty()) ? 'New' : 'Assigned';
            if($progress !== 'New'){
                if(!$ois->Assigned()->where('end_at',0)->exists()) $progress = 'Completed';
                elseif($ois->Assigned()->where('start_at','>',0)->exists()) $progress = 'Processing';
            }
            $ois->progress = $progress; $ois->save();
        });
    }
    private function updateOIProgress($OI){
        $OI->each(function($oi){
            $progress = ($oi->Delivery) ? 'Delivered' : (($oi->OIS()->where('progress','!=','Completed')->exists()) ? 'New' : 'Service Completed');
            if($progress === 'Service Completed' && $oi->hub === $oi->Order->hub) $progress = 'Ready To Deliver';
            if($progress === 'New' && $oi->OIS()->whereIn('progress',['Processing','Assigned'])->exists()) $progress = 'In Service';
            $oi->progress = $progress; $oi->save();
        });
    }
    private function updateOProgress($O){
        $ItemsCount = $O->Items()->count();
        switch ($O->Items()->count()){
            case $O->Items()->whereProgress('Delivered')->count():
                $progress = 'Delivered'; break;
            case $O->Items()->whereProgress('Ready To Deliver')->count():
                $progress = 'Ready To Deliver'; break;
            case $O->Items()->whereProgress('Service Completed')->count():
                $progress = 'Service Completed'; break;
            case $O->Items()->whereProgress('New')->count():
                $progress = 'New'; break;
            default:
                if($O->Items()->whereProgress('Delivered')->exists()) $progress = 'Delivered Partially';
                else $progress = 'In Service';
                break;
        }
        $O->progress = $progress;$O->save();
    }
}
