<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('active',function(Builder $builder){ $builder->where(function($Q){ $Q->where('status','Active'); }); });
    }

    public function Order(){ return $this->belongsTo(Order::class,'order','id'); }
    public function Customer(){ return $this->belongsTo(User::class,'customer','id'); }
    public function Items(){ return $this->hasMany(InvoiceItem::class,'invoice','id'); }
    public function Receipts(){ return $this->hasMany(Receipt::class,'invoice','id'); }

}
