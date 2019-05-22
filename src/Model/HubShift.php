<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\HubShiftUpdated;
use Illuminate\Database\Eloquent\Builder;

class HubShift extends Model
{
    protected $table = 'hub_shift';

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('latest',function(Builder $builder){ $builder->orderByDesc('created_at'); });
    }

    protected $dispatchesEvents = ['updated' => HubShiftUpdated::class];

    public function Source(){ return $this->belongsTo(Hub::class,'source_hub','id'); }
    public function Target(){ return $this->belongsTo(Hub::class,'destination_hub','id'); }
    public function Items(){ return $this->hasMany(HubShiftItem::class,'hs','id'); }
    public function ManageItems(){ return $this->belongsToMany(OrderItem::class,'hub_shift_items','hs','oi','id','id')->withTimestamps(); }
}
