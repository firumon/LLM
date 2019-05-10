<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\CustomerCreated;
use Illuminate\Database\Eloquent\Builder;
use Milestone\Appframe\Model\User as AppframeUser;

class Customer extends AppframeUser
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('Customers',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','customers'); });
        });
    }

    protected $table = 'users';
    //protected $dispatchesEvents = [ 'created' => CustomerCreated::class ];
    protected $with = ['Detail'];

    public function Orders(){ return $this->hasMany(Order::class,'customer','id'); }
    public function Invoices(){ return $this->hasMany(Invoice::class,'customer','id'); }
    public function Receipts(){ return $this->hasManyThrough(Receipt::class, Invoice::class, 'customer', 'invoice', 'id', 'id'); }
    public function Detail(){ return $this->hasOne(CustomerDetail::class, 'customer', 'id'); }

    public function setEmailAttribute(){ $this->attributes['email'] = implode("@",[now()->format('ymdHis'),'llm.mail']); }
}
