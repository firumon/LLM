<?php

namespace Firumon\LLM\Model;

class ItemService extends Model
{
    protected $table = 'item_services';

    public function Item(){ return $this->belongsTo(Item::class,'item','id'); }
    public function Service(){ return $this->belongsTo(Service::class,'service','id'); }
    public function Price(){ return $this->hasMany(PricelistContent::class,'is','id'); }

    protected $touches = ['Item'];
}
