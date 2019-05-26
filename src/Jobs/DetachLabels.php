<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\IdentityLabel;
use Firumon\LLM\Model\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class DetachLabels implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $hub, $orderItems, $labels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($hub, $oi)
    {
        $this->hub = $hub;
        $this->orderItems = OrderItem::find((array) $oi);
        $this->labels = $this->orderItems->pluck('label')->all();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        IdentityLabel::whereIn('id',(array) $this->labels)->update(['hub' => $this->hub,'current' => null]);
        $this->orderItems->each(function($oi){ $oi->update(['label' => null]); });
    }
}
