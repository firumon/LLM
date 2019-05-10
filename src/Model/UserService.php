<?php

namespace Firumon\LLM\Model;

class UserService extends Model
{
    protected $table = 'user_services';

    public function User(){ return $this->belongsTo(User::class, 'user','id'); }
    public function Service(){ return $this->belongsTo(Service::class, 'service', 'id'); }
}
