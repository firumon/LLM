<?php

namespace Firumon\LLM\Model;

class HubShift extends Model
{
    protected $table = 'hub_shift';

    public function Source(){ return $this->belongsTo(Hub::class,'source_hub','id'); }
    public function Target(){ return $this->belongsTo(Hub::class,'destination_hub','id'); }
    public function Items(){ return $this->hasMany(HubShiftItem::class,'hs','id'); }
}
