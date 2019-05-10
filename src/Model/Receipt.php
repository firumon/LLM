<?php

namespace Firumon\LLM\Model;

class Receipt extends Model
{
    protected $table = 'receipts';

    public function Invoice(){ return $this->belongsTo(Invoice::class, 'invoice', 'id'); }
}
