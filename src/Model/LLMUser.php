<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\LLMUserCreated;
use Illuminate\Database\Eloquent\Builder;
use Milestone\Appframe\Model\User as AppframeUser;

class LLMUser extends AppframeUser
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('LLMUsers',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','llm_users'); });
        });
    }

    protected $table = 'users';

    protected $dispatchesEvents = [ 'created' => LLMUserCreated::class ];
    public function Hubs(){ return $this->belongsToMany(Hub::class,'hub_users','user','hub')->withTimestamps(); }
}
