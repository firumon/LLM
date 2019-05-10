<?php

namespace Firumon\LLM\Model;

class HubShiftItem extends Model
{
    protected $table = 'hub_shift_items';

    public function Shift(){ return $this->belongsTo(HubShift::class,'hs','id'); }
    public function Item(){ return $this->belongsTo(OrderItem::class,'oi','id')->with(['Item']); }
}
