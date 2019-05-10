<?php

namespace Firumon\LLM\Model;

class HubUser extends Model
{
    protected $table = 'hub_users';

    public function Hub(){ return $this->belongsTo(Hub::class, 'hub', 'id'); }
    public function User(){ return $this->belongsTo(User::class, 'user','id'); }
}
