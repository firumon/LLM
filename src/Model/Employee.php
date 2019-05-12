<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\EmployeeCreated;
use Illuminate\Database\Eloquent\Builder;

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

    protected $dispatchesEvents = [ 'created' => EmployeeCreated::class ];

    public function scopeManagers($Q){ return $Q->whereHas('Groups',function($q){ $q->where('name','managers'); }); }
    public function scopeProviders($Q){ return $Q->whereHas('Groups',function($q){ $q->where('name','service_providers'); }); }
    public function scopeMyHubProviders($Q){ return $Q->providers()->whereHas('Hubs',function($q){ $q->whereIn('id',LLMUser::find(request()->user()->id)->Hubs->map->id->toArray()); }); }

    public function Services(){ return $this->belongsToMany(Service::class,'user_services','user','service')->withTimestamps(); }
    public function GroupsDisplayable(){ return $this->belongsToMany(Group::class,'__group_users','user','group')->employeeGroups(); }
}
