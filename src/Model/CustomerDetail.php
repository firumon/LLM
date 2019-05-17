<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\CustomerCreated;
use Illuminate\Database\Eloquent\Builder;
use Milestone\Appframe\Model\User as AppframeUser;

class CustomerDetail extends AppframeUser
{
    protected $table = 'customer_details';
    protected $touches = ['Customer'];

    public function Customer(){ return $this->belongsTo(Customer::class,'customer','id'); }
}
