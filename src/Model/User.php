<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\LLMUserCreated;
use Milestone\Appframe\Model\User as AppframeUser;
use Illuminate\Database\Eloquent\Builder;

class User extends AppframeUser
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('LLMUsers',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','llm_users'); });
        });
    }

    protected $dispatchesEvents = [ 'created' => LLMUserCreated::class ];
}
