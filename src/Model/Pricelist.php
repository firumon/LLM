<?php

namespace Firumon\LLM\Model;

class Pricelist extends Model
{
    protected $table = 'pricelist';

    public function Contents(){ return $this->hasMany(PricelistContent::class,'pl','id'); }
}
