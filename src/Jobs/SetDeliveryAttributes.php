<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\LLMUser;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Arr;

class SetDeliveryAttributes implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $delivery, $user, $hub;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($delivery,$user,$hub)
    {
        $this->delivery = $delivery;
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
        if(!$this->delivery->user && $this->user) $this->delivery->user = $this->user;
        if(!$this->delivery->hub && $this->hub) $this->delivery->hub = $this->hub;
        $this->delivery->save();
    }
}
