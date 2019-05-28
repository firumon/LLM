<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\OrderItemService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SetTasksAssignedAttributes implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $ois, $assigned_by;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($ois_id,$user = null)
    {
        $this->ois = OrderItemService::find($ois_id);
        $this->assigned_by = $user ?? request()->user()->id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $assigned_on = now()->timestamp; $assigned_by = $this->assigned_by;
        $this->ois->Assigned()->whereNull('assigned_by')->orWhere('assigned_on',0)->update(compact('assigned_by','assigned_on'));
    }
}
