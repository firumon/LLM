<?php

namespace Firumon\LLM\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Carbon;

class SetAssignDetailsForNewlyAddedTasks implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $created_at, $newTasks, $user;
    private $createdRecentSeconds = 5;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($updated_at,$employee,$user)
    {
        $this->created_at = Carbon::createFromFormat('Y-m-d H:i:s',$updated_at)->subSeconds($this->createdRecentSeconds);
        $this->newTasks = $employee->TaskList->where('assigned_by',null)->where('created_at','>=',$this->created_at);
        $this->user = $user ?? request()->user()->id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->newTasks->isNotEmpty()){
            $requester = $this->user;
            $this->newTasks->each(function($oisu)use($requester){
                $oisu->assigned_by = $requester;
                $oisu->assigned_on = Carbon::now()->timestamp;
                $oisu->save(); UpdateCompleteProgressOfOrderItem::dispatch($oisu->OIS->oi);
            });
        }
    }
}
