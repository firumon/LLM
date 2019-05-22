<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\Employee;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class EmployeeUpdating
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
        $this->employee = $employee;
    }

}
