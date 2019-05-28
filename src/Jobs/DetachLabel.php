<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\IdentityLabel;
use Firumon\LLM\Model\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class DetachLabel implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $hub, $orderItem, $label;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($oi)
    {
        $this->orderItem = OrderItem::find($oi);
        $this->hub = $this->orderItem->hub;
        $this->label = $this->orderItem->label;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->label) IdentityLabel::find($this->label)->update(['hub' => $this->hub,'current' => null]);
        $this->orderItem->update(['label' => null]);
    }
}
