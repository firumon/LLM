<?php

namespace Firumon\LLM\Model;

class Shelf extends Model
{
    protected $table = 'shelf';

    public function Hub(){ return $this->belongsTo(Hub::class, 'hub','id'); }
    public function Items(){ return $this->hasMany(OrderItem::class, 'shelf', 'id'); }
}
