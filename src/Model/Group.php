<?php

namespace Firumon\LLM\Model;

use Illuminate\Support\Facades\DB;
use Milestone\Appframe\Model\Group as AppframeGroup;
use Illuminate\Database\Eloquent\Builder;

class Group extends AppframeGroup
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('LLM',function(Builder $builder){
            $builder->where(function($Q){ $Q->where(DB::raw('`__groups`.`id`'),'>',10); });
        });
    }

    public function scopeEmployeeGroups($Q){ return $Q->whereIn('name',Employee::$_Groups); }
}
