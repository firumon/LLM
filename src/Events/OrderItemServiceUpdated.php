<?php

    namespace Firumon\LLM\Events;

use Firumon\LLM\Jobs\SetTasksAssignedAttributes;
use Firumon\LLM\Model\OrderItemService;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderItemServiceUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderItemService $orderItemService)
    {
        $changes = $orderItemService->getChanges();
        if(!empty($changes) && count($changes) === 1 && array_key_exists('updated_at',$changes)) {
            SetTasksAssignedAttributes::dispatch($orderItemService->id,request()->user()->id);
        }
    }

}
