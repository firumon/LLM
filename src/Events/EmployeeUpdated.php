<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\SetAssignDetailsForNewlyAddedTasks;
use Firumon\LLM\Model\Employee;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class EmployeeUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $employee;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Employee $employee)
    {
        $changes = $employee->getChanges();
        if(!empty($changes) && count($changes) === 1 && array_key_exists('updated_at',$changes)) SetAssignDetailsForNewlyAddedTasks::dispatch($changes['updated_at'],$employee->fresh(),request()->user()->id);
    }

}
