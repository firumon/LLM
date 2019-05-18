<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;
use Milestone\Appframe\Model\GroupUser;

class Customer extends User
{
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('Customers',function(Builder $builder){
            $builder->whereHas('Groups',function($Q){ $Q->where('name','customers'); });
        });
        static::updated(function($customerModel){
            $user = $customerModel->id; CustomerDetail::where('customer',$user)->latest()->skip(1)->delete();
            $group = Group::where('name','customers')->first()->id;
            GroupUser::where(compact('user','group'))->skip(1)->delete();
        });
    }

    protected $table = 'users';
    protected $with = ['Detail'];

    //protected $dispatchesEvents = ['updated'];

    public function Orders(){ return $this->hasMany(Order::class,'customer','id'); }
    public function Invoices(){ return $this->hasMany(Invoice::class,'customer','id'); }
    public function Receipts(){ return $this->hasManyThrough(Receipt::class, Invoice::class, 'customer', 'invoice', 'id', 'id'); }
    public function Detail(){ return $this->hasOne(CustomerDetail::class, 'customer', 'id'); }

    public function setEmailAttribute(){ $this->attributes['email'] = implode("@",[now()->format('ymdHis'),'llm.mail']); }
}
