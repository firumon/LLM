<?php

namespace Firumon\LLM\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    public function Order(){ return $this->belongsTo(Order::class,'order','id'); }
    public function Item(){ return $this->belongsTo(Item::class,'item','id'); }
    public function Label(){ return $this->belongsTo(IdentityLabel::class,'label','id'); }
    public function Shelf(){ return $this->belongsTo(Shelf::class,'shelf','id'); }
    public function Services(){ return $this->hasMany(OrderItemService::class,'oi','id'); }
    public function Shifts(){ return $this->hasMany(HubShiftItem::class,'oi','id'); }

    protected $appends = ['read_name'];
    function getReadNameAttribute($value){ return implode("/",[$this->order,$this->Item->name]); }
}