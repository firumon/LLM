<?php

namespace Firumon\LLM\Model;

class Shelf extends Model
{
    protected $table = 'shelf';

    public function Hub(){ return $this->belongsTo(Hub::class, 'hub','id')->withoutGlobalScope('Own'); }
    public function Items(){ return $this->hasMany(OrderItem::class, 'shelf', 'id'); }

    protected $with = ['Hub'];
    protected $appends = ['hub_shelf_name'];
    public function getHubShelfNameAttribute(){ return "({$this->Hub->name}) {$this->name}"; }
}
