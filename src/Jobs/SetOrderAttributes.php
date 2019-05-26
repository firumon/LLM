<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\LLMUser;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Arr;

class SetOrderAttributes implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $order, $user, $hub;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order,$user = null,$hub = null)
    {
        $this->order = $order;
        $this->user = $user ?? request()->user()->id;
        $this->hub = $hub ?? Arr::get(LLMUser::find($this->user)->Hubs,'0.id',null);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(!$this->order->user && $this->user) $this->order->user = $this->user;
        if(!$this->order->hub && $this->hub) $this->order->hub = $this->hub;
        $this->order->save();
    }
}
