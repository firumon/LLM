<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;

class Hub extends Model
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('Own',function(Builder $builder){

        });

    }

    protected $table = 'hubs';

    public function Users(){ return $this->belongsToMany(LLMUser::class,'hub_users', 'hub','user')->withTimestamps(); }
    public function HubUsers(){ return $this->hasMany(HubUser::class,'hub', 'id'); }
    public function Services(){ return $this->hasManyThrough(UserService::class,HubUser::class,'hub','user','id','user')->with(['Service']); }
    public function Shelves(){ return $this->hasMany(Shelf::class,'hub', 'id'); }
    public function DefaultShelf(){ return $this->belongsToMany(Shelf::class,'hub_default_shelf', 'hub','shelf','id','id')->withTimestamps(); }
    public function Orders(){ return $this->hasMany(Order::class,'hub', 'id'); }
    public function Deliveries(){ return $this->hasMany(Delivery::class,'hub', 'id'); }
    public function ShiftFrom(){ return $this->hasMany(HubShift::class,'source_hub', 'id'); }
    public function ShiftTowards(){ return $this->hasMany(HubShift::class,'destination_hub', 'id'); }
    public function OrderItems(){ return $this->hasMany(OrderItem::class,'hub', 'id'); }
}
