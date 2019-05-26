<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\OrderItemServiceUser;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SetOrderItemServiceUserAttributes implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $oisu, $assigned_by;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($oisu_id,$user = null)
    {
        $this->oisu = OrderItemServiceUser::find($oisu_id);
        $this->assigned_by = $user ?? request()->user()->id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(!$this->oisu->assigned_by) { $this->oisu->assigned_by = $this->assigned_by; }
        if($this->oisu->getOriginal('assigned_on') === 0) $this->oisu->assigned_on = now()->timestamp;
        $this->oisu->save();
    }
}
