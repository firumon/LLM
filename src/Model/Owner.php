<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;

class Owner extends LLMUser
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('Owners',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','owners'); });
        });
    }

    protected $table = 'users';
}
