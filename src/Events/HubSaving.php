<?php

namespace Firumon\LLM\Events;

use Firumon\LLM\Model\Hub;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Str;

class HubSaving
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Hub $hub)
    {
        if($hub->pin){
            $hub->setAttribute('url',$this->generateUrl());
        }
    }

    private function generateUrl(){
        return Str::uuid();
    }

}
