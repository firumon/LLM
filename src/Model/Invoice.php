<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $with = ['Customer'];

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('active',function(Builder $builder){ $builder->where(function($Q){ $Q->where('status','Active'); }); });
    }

    public function Order(){ return $this->belongsTo(Order::class,'order','id'); }
    public function Customer(){ return $this->belongsTo(Customer::class,'customer','id'); }
    public function Items(){ return $this->hasMany(InvoiceItem::class,'invoice','id'); }
    public function Receipts(){ return $this->hasMany(Receipt::class,'invoice','id'); }

    public function scopePending($Q){ return $Q->where('progress',"!=",'Paid'); }
    public function scopePaid($Q){ return $Q->where('progress','Paid'); }
    public function scopeOwn($Q){ return $Q->whereHas('Order',function($Q){ return $Q->ownHub(); }); }

    protected $appends = ['total','name','paid'];

    public function getTotalAttribute(){ return $this->Items->sum(function($item){ return $item->price * $item->quantity; }); }
    public function getPaidAttribute(){ return $this->Receipts->sum('amount'); }
    public function getNameAttribute(){ return implode('/',[$this->id,$this->Customer->name,$this->order,$this->date]); }

}
