<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Model\HubShift;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class HubShiftUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $hubShift;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(HubShift $hubShift)
    {
        $this->hubShift = $hubShift->load(['Items.Item']);
    }

}
