<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table = 'orders';
    public static $recentDuration = '-3 days';

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('active',function(Builder $builder){ $builder->where(function($Q){ $Q->where(DB::raw('`orders`.`status`'),'Active'); }); });
        static::addGlobalScope('latest',function(Builder $builder){ $builder->latest('date'); });
    }

    public function Items(){ return $this->hasMany(OrderItem::class,'order','id'); }
    public function Customer(){ return $this->belongsTo(Customer::class,'customer','id'); }
    public function Hub(){ return $this->belongsTo(Hub::class,'hub','id'); }
    public function Invoice(){ return $this->hasOne(Invoice::class,'order','id'); }
    public function Deliveries(){ return $this->hasMany(Delivery::class,'order','id'); }
    public function Receipts(){ return $this->hasManyThrough(Receipt::class,Invoice::class,'order','invoice','id','id'); }

    public function scopeRecent($Q){ return $Q->where('date','>=',date('Y-m-d',strtotime(static::$recentDuration))); }
    public function scopeUndelivered($Q){ return $Q->whereNot('progress','Delivered'); }
    public function scopeProcessing($Q){ return $Q->where('progress','In Service'); }
}
