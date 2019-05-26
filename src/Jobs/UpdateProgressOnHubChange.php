<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateProgressOnHubChange implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $orderItem;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($oi_id)
    {
        $this->orderItem = OrderItem::with('Order')->find($oi_id);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->orderItem->hub === $this->orderItem->Order->hub){
            UpdateCompleteProgressOfOrderItem::dispatch($this->orderItem->id);
        };
    }
}
