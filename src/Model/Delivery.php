<?php

namespace Firumon\LLM\Model;

class Delivery extends Model
{
    protected $table = 'delivery';

    public function Order(){ return $this->belongsTo(Order::class,'order','id'); }
    public function Hub(){ return $this->belongsTo(Hub::class,'hub','id'); }
    public function Items(){ return $this->hasMany(DeliveryItem::class,'delivery','id'); }
}
