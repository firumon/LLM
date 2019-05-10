<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table = 'orders';

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('active',function(Builder $builder){
            $builder->where(function($Q){ $Q->where(DB::raw('`orders`.`status`'),'Active'); });
        });
    }

    public function Items(){ return $this->hasMany(OrderItem::class,'order','id'); }
    public function Customer(){ return $this->belongsTo(User::class,'customer','id'); }
    public function Hub(){ return $this->belongsTo(Hub::class,'hub','id'); }
    public function Invoice(){ return $this->hasOne(Invoice::class,'order','id'); }
    public function Deliveries(){ return $this->hasMany(Delivery::class,'order','id'); }
    public function Receipts(){ return $this->hasManyThrough(Receipt::class,Invoice::class,'order','invoice','id','id'); }
}
