<?php

namespace Firumon\LLM\Model;

class Item extends Model
{
    protected $table = 'items';

    public function ItemServices(){ return $this->hasMany(ItemService::class,'item','id'); }
    public function Services(){ return $this->belongsToMany(Service::class,'item_services','item','service')->withPivot(['name'])->withTimestamps(); }
    public function Prices(){ return $this->belongsToMany(PricelistContent::class,'item_services','item','id','id','is')->withPivot(['name','service']); }
    public function Unassigned(){ return $this->hasManyThrough(OrderItemService::class,OrderItem::class,'item','oi','id','id')->where('progress','New'); }
    public function Assigned(){ return $this->hasManyThrough(OrderItemService::class,OrderItem::class,'item','oi','id','id')->where('progress','Assigned'); }
    public function Processing(){ return $this->hasManyThrough(OrderItemService::class,OrderItem::class,'item','oi','id','id')->where('progress','Processing'); }
    public function Awaiting(){ return $this->hasManyThrough(OrderItemService::class,OrderItem::class,'item','oi','id','id')->where('progress','Awaiting'); }
    public function ServicingUsers(){ return $this->hasManyThrough(OrderItemService::class,OrderItem::class,'item','oi','id','id')->with(['Users']); }
}
