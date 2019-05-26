<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateOrderItemsHubForHavingProgressAsNew implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $order, $hub;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order_id,$hub_id)
    {
        $this->order = Order::find($order_id);
        $this->hub = $hub_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $newHub = $this->hub;
        $this->order->Items()->where('progress','New')->each(function($orderItem)use($newHub){
            $orderItem->hub = $newHub; $orderItem->save();
        });
    }
}
