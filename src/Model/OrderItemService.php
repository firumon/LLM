<?php

namespace Firumon\LLM\Model;

class OrderItemService extends Model
{
    protected $table = 'order_item_services';

    public function OrderItem(){ return $this->belongsTo(OrderItem::class,'oi','id'); }
    public function Service(){ return $this->belongsTo(Service::class,'service','id'); }
    public function Users(){ return $this->hasMany(OrderItemServiceUser::class,'ois','id'); }
}
