<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\OrderItemServiceUpdated;
use Illuminate\Support\Arr;

class OrderItemService extends Model
{
    protected $table = 'order_item_services';
    protected $dispatchesEvents = ['updated' => OrderItemServiceUpdated::class];

    public function scopeOwnHub($Q){ return $Q->whereHas('OrderItem',function($Q){ return $Q->ownHubItems(); }); }
    public function scopeAssignable($Q){ return $Q->whereIn('progress',['New','Assigned']); }

    public function OrderItem(){ return $this->belongsTo(OrderItem::class,'oi','id'); }
    public function Service(){ return $this->belongsTo(Service::class,'service','id'); }
    public function Assigned(){ return $this->hasMany(OrderItemServiceUser::class,'ois','id'); }
    public function Users(){ return $this->belongsToMany(Employee::class,'order_item_service_user','ois','user'); }

    protected $with = ['OrderItem','Service'];
    protected $appends = ['name','mine'];
    public function getNameAttribute(){ return "{$this->OrderItem->name}/{$this->Service->name}"; }
    public function getMineAttribute(){ $user = Arr::get(request()->user(),'id',null); $this->Assigned()->where(compact('user'))->exists(); }
}
