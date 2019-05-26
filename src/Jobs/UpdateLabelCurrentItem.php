<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\IdentityLabel;
use Firumon\LLM\Model\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateLabelCurrentItem implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $label, $oi;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($label,$oi)
    {
        $this->label = IdentityLabel::find($label);
        $this->oi = $oi;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        if($this->label){
            OrderItem::whereLabel($this->label->id)->where('id','!=',$this->oi)->update(['label' => null]);
            $this->label->current = $this->oi;
            $this->label->save();
        }
    }
}
