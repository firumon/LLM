<?php

namespace Firumon\LLM\Model;

use Illuminate\Database\Eloquent\Builder;

class HubShift extends Model
{
    protected $table = 'hub_shift';

    protected function bootIfNotBooted(){
        parent::bootIfNotBooted();
        static::addGlobalScope('latest',function(Builder $builder){ $builder->orderByDesc('created_at'); });
    }

    public function Source(){ return $this->belongsTo(Hub::class,'source_hub','id'); }
    public function Target(){ return $this->belongsTo(Hub::class,'destination_hub','id'); }
    public function Items(){ return $this->hasMany(HubShiftItem::class,'hs','id'); }
    public function ManageItems(){ return $this->belongsToMany(OrderItem::class,'hub_shift_items','hs','oi','id','id'); }
}
