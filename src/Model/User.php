<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\LLMUserCreated;
use Milestone\Appframe\Model\User as AppframeUser;
use Illuminate\Database\Eloquent\Builder;

class User extends AppframeUser
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('Owners',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','llm_users'); });
        });
    }
    public function Images(){ return $this->hasOne(Image::class,'type_id', 'id')->where('type','User'); }
}
