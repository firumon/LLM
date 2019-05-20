<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\OrderItemServiceUpdated;

class OrderItemService extends Model
{
    protected $table = 'order_item_services';

    public function OrderItem(){ return $this->belongsTo(OrderItem::class,'oi','id'); }
    public function Service(){ return $this->belongsTo(Service::class,'service','id'); }
    public function Assigned(){ return $this->hasMany(OrderItemServiceUser::class,'ois','id'); }
    public function Users(){ return $this->belongsToMany(Employee::class,'order_item_service_user','ois','user'); }

    protected $with = ['OrderItem','Service'];
    protected $appends = ['name'];
    public function getNameAttribute(){ return "{$this->OrderItem->name}/{$this->Service->name}"; }
}
