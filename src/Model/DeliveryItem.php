<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\DeliveryItemCreated;

class DeliveryItem extends Model
{
    protected $table = 'delivery_items';

    public function Delivery(){ return $this->belongsTo(Delivery::class,'delivery','id'); }
    public function Item(){ return $this->belongsTo(OrderItem::class,'oi','id'); }
    public function Shelf(){ return $this->belongsTo(Shelf::class,'shelf','id'); }

    protected $dispatchesEvents = ['created' => DeliveryItemCreated::class];
}
