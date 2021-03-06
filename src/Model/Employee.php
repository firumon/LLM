<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\EmployeeCreated;
use Firumon\LLM\Events\EmployeeUpdated;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class Employee extends LLMUser
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('Employees',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','employees'); });
        });
    }

    protected $table = 'users';
    public static $_Groups = ['managers','service_providers'];

    protected $dispatchesEvents = [ 'created' => EmployeeCreated::class,'updated' => EmployeeUpdated::class ];

    public function scopeManagers($Q){ return $Q->whereHas('Groups',function($q){ $q->where('name','managers'); }); }
    public function scopeProviders($Q){ return $Q->whereHas('Groups',function($q){ $q->where('name','service_providers'); }); }
    public function scopeMyHubProviders($Q){
        return (request()->user()->Groups->contains('name','owners'))
            ? $Q->providers()
            : $Q->providers()->whereHas('Hubs',function($q){ $q->whereIn('id',LLMUser::find(request()->user()->id)->Hubs->pluck('id')->all()); });
    }

    public function Services(){ return $this->belongsToMany(Service::class,'user_services','user','service')->withTimestamps(); }
    public function GroupsDisplayable(){ return $this->belongsToMany(Group::class,'__group_users','user','group')->employeeGroups(); }
    public function Tasks(){ return $this->belongsToMany(OrderItemService::class,'order_item_service_user','user','ois','id','id')->withTimestamps(); }
    public function TaskList(){ return $this->hasMany(OrderItemServiceUser::class,'user','id'); }
    public function Images(){ return $this->hasOne(Image::class,'type_id', 'id')->where('type','User'); }

    protected $appends = ['name_and_services'];
    public function getNameAndServicesAttribute(){ return $this->name . (($this->Services && $this->Services->isNotempty()) ? (' -> ' . implode(',', $this->Services->pluck('name')->all())) : ''); }
}
