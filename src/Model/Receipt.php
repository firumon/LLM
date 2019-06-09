<?php

namespace Firumon\LLM\Model;

class Receipt extends Model
{
    protected $table = 'receipts';

    protected static function boot(){
        parent::boot();
        static::created(function($receipt){
            $receipt->user = request()->user()->id; $receipt->save();
            if(($total = $receipt->Invoice->Items->sum('price')) > 0) $receipt->Invoice->progress = 'Unpaid';
            if(($receipts = $receipt->Invoice->Receipts->sum('amount')) > 0 ) $receipt->Invoice->progress = 'Paid Partially';
            if($receipts >= $total) $receipt->Invoice->progress = 'Paid';
            $receipt->Invoice->save();
        });
    }

    public function scopeOwn($Q){ $Q->whereHas('Invoice',function($Q){ return $Q->own(); }); }

    protected $touches = ['Invoice'];

    public function Invoice(){ return $this->belongsTo(Invoice::class, 'invoice', 'id'); }
}
