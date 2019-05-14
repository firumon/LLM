<?php

namespace Firumon\LLM\Model;

class PricelistContent extends Model
{
    protected $table = 'pricelist_contents';
    protected $touches = ['Pricelist','ItemService'];

    public function Pricelist(){ return $this->belongsTo(Pricelist::class,'pl','id'); }
    public function ItemService(){ return $this->belongsTo(ItemService::class,'is','id'); }

    public function scopeActivePL($Q){ $Q->whereHas('Pricelist',function($q){ $q->where('status','Active'); }); }

    protected $with = ['Pricelist'];
    protected $appends = ['price_and_pl'];

    public function getPriceAndPlAttribute(){ return "{$this->price} ({$this->Pricelist->name})"; }
}
