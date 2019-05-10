<?php

namespace Firumon\LLM\Model;

class IdentityLabel extends Model
{
    protected $table = 'identity_labels';

    public function Item(){ return $this->hasOne(OrderItem::class,'label','id'); }
}
