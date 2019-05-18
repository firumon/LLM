<?php

namespace Firumon\LLM\Model;


use Firumon\LLM\Events\OrderItemCreated;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $touches = ['Order','OIS'];

    protected $dispatchesEvents = ['created' => OrderItemCreated::class];

    public function Order(){ return $this->belongsTo(Order::class,'order','id'); }
    public function Item(){ return $this->belongsTo(Item::class,'item','id'); }
    public function Label(){ return $this->belongsTo(IdentityLabel::class,'label','id'); }
    public function Shelf(){ return $this->belongsTo(Shelf::class,'shelf','id'); }
    public function OIS(){ return $this->hasMany(OrderItemService::class,'oi','id'); }
    public function Shifts(){ return $this->hasMany(HubShiftItem::class,'oi','id'); }
    public function Services(){ return $this->belongsToMany(Service::class,'order_item_services','oi','service','id','id')->withTimestamps()->withPivot(['progress']); }
    public function Hub(){ return $this->belongsTo(Hub::class,'hub','id'); }

    protected $appends = ['name'];
    function getNameAttribute(){ return implode("/",[$this->order,$this->Item->name]); }
}
