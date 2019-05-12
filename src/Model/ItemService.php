<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;

class ItemService extends Model
{
    protected $table = 'item_services';

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('active',function(Builder $builder){ $builder->where(function($Q){ $Q->where('status','Active'); }); });
    }

    public function Item(){ return $this->belongsTo(Item::class,'item','id'); }
    public function Service(){ return $this->belongsTo(Service::class,'service','id'); }
    public function Price(){ return $this->hasMany(PricelistContent::class,'is','id'); }

    protected $touches = ['Item'];
}
