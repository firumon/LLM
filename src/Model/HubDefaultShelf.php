<?php

namespace Firumon\LLM\Model;

class HubDefaultShelf extends Model
{
    protected $table = 'hub_default_shelf';

    public function Hub(){ return $this->belongsTo(Hub::class, 'hub','id'); }
    public function Shelf(){ return $this->belongsTo(Shelf::class, 'shelf', 'id'); }
}
