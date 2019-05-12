<?php

namespace Firumon\LLM\Model;

class Service extends Model
{
    protected $table = 'services';

    public function Providers(){ return $this->belongsToMany(User::class,'user_services','service','user','id','id')->withTimestamps(); }
    public function Hubs(){ return $this->hasManyThrough(HubUser::class, UserService::class,'service','user','id','user')->with(['Hub']); }
    public function Items(){ return $this->belongsToMany(Item::class,'item_services','service','item','id','id')->withPivot(['name'])->withTimestamps(); }
    public function Prices(){ return $this->belongsToMany(PricelistContent::class,'item_services','service','id','id','is')->withPivot(['name','item']); }
    public function Unassigned(){ return $this->hasMany(OrderItemService::class,'service','id')->where('progress','New'); }
    public function Assigned(){ return $this->hasMany(OrderItemService::class,'service','id')->where('progress','Assigned'); }
    public function Processing(){ return $this->hasMany(OrderItemService::class,'service','id')->where('progress','Processing'); }
    public function Awaiting(){ return $this->hasMany(OrderItemService::class,'service','id')->where('progress','Awaiting'); }
}
