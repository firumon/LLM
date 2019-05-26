<?php

namespace Firumon\LLM\Jobs;

use Firumon\LLM\Model\Delivery;
use Firumon\LLM\Model\DeliveryItem;
use Firumon\LLM\Model\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddDeliveryItems implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $delivery, $orderItems;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($delivery_id, $orderItems)
    {
        $this->delivery = $delivery_id;
        $this->orderItems = OrderItem::find((array) $orderItems);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $delivery = $this->delivery;
        $this->orderItems->each(function($oi)use($delivery,&$free_labels){
            $delivery_item = new DeliveryItem();
            $delivery_item->oi = $oi->id; $delivery_item->shelf = $oi->shelf; $delivery_item->delivery = $delivery;
            $delivery_item->save();
            UpdateCompleteProgressOfOrderItem::dispatch($oi->id)->delay(now()->addSeconds(3));
        });
    }
}
