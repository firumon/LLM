<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\DeliveryCreated;

class Delivery extends Model
{
    protected $table = 'delivery';

    public function Order(){ return $this->belongsTo(Order::class,'order','id'); }
    public function Hub(){ return $this->belongsTo(Hub::class,'hub','id'); }
    public function Items(){ return $this->hasMany(DeliveryItem::class,'delivery','id'); }

    protected $dispatchesEvents = ['created' => DeliveryCreated::class];

    public function scopeOwn($Q){ $Q->whereHas('Hub',function($Q){ $Q->ownHubs(); }); }
}
