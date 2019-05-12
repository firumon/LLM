<?php

namespace Firumon\LLM\Model;

class IdentityLabel extends Model
{
    protected $table = 'identity_labels';

    public function Item(){ return $this->hasOne(OrderItem::class,'label','id'); }

    public function scopeAvailable($Q){ return $Q->whereNull('current'); }

    protected $with = ['Item'];
    protected $appends = ['name'];
    public function getNameAttribute(){ return ($this->Item) ? "{$this->code} - {$this->Item->name}" : $this->code; }
}
