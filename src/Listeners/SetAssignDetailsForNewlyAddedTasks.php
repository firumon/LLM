<?php

namespace Firumon\LLM\Listeners;

use Firumon\LLM\Events\EmployeeUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;

class SetAssignDetailsForNewlyAddedTasks implements ShouldQueue
{

    private $createdRecentSeconds = 5;
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
    public function handle(EmployeeUpdated $event)
    {
        $dirty = $event->employee->getDirty();
        if(!empty($dirty) && count($dirty) === 1 && array_key_exists('updated_at',$dirty)){
            $created_at = Carbon::createFromFormat('Y-m-d H:i:s',$dirty['updated_at'])->subSeconds($this->createdRecentSeconds);
            $newTasks = $event->employee->TaskList->where('assigned_by',null)->where('created_at','>=',$created_at);
            if($newTasks->isNotEmpty()){
                $requester = request()->user()->id;
                $newTasks->each(function($oisu)use($requester){
                    $oisu->assigned_by = $requester; $oisu->assigned_on = Carbon::now()->timestamp; $oisu->save();
                });
            }
        }
    }
}
