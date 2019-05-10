<?php

namespace Firumon\LLM\Model;

class OrderItemServiceUser extends Model
{
    protected $table = 'order_item_service_user';

    public function Service(){ return $this->belongsTo(OrderItemService::class,'ois','id'); }
    public function User(){ return $this->belongsTo(User::class,'user','id'); }
}
