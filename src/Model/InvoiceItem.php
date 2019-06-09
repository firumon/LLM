<?php

namespace Firumon\LLM\Model;

class InvoiceItem extends Model
{
    protected $table = 'invoice_items';

    public function Invoice(){ return $this->belongsTo(Invoice::class,'invoice','id'); }
    public function Item(){ return $this->belongsTo(Item::class,'item','id'); }
    public function Service(){ return $this->belongsTo(Service::class,'service','id'); }

    protected $appends = ['total'];
    public function getTotalAttribute(){ return $this->price * $this->quantity; }
}
