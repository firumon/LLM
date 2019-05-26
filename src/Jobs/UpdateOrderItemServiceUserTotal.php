<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\OrderItemServiceUser;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateOrderItemServiceUserTotal implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $oisu;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($oisu)
    {
        $this->oisu = OrderItemServiceUser::find($oisu);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $oisu = $this->oisu;
        $assigned_on = $oisu->getOriginal('assigned_on'); $start_at = $oisu->getOriginal('start_at'); $end_at = $oisu->getOriginal('end_at');
        $service_time = ($end_at > $start_at) ? ($end_at - $start_at) : 0;
        $total_time = ($end_at > $assigned_on) ? ($end_at - $assigned_on) : 0;
        $oisu->service_time = $service_time; $oisu->total_time = $total_time;
        $oisu->save();
    }
}
