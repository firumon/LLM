<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\OrderItemServiceUserCreated;
use Firumon\LLM\Events\OrderItemServiceUserCreating;

class OrderItemServiceUser extends Model
{
    protected $table = 'order_item_service_user';

    public function OIS(){ return $this->belongsTo(OrderItemService::class,'ois','id'); }
    public function User(){ return $this->belongsTo(Employee::class,'user','id'); }
    public function AssignedBy(){ return $this->belongsTo(LLMUser::class,'assigned_by','id'); }

    protected $with = ['OIS','User','AssignedBy'];
    protected $appends = ['name','assigned'];
    public function getNameAttribute(){ return "{$this->OIS->name}/{$this->User->name}"; }
    public function getAssignedAttribute(){ return ($this->AssignedBy) ? "{$this->AssignedBy->name} on {$this->getTimeToDateReadBy($this->assigned_on)}"  : ''; }
    public function getStartAtAttribute($start_at){ return $this->getTimeToDateReadBy($start_at); }
    public function getEndAtAttribute($end_at){ return $this->getTimeToDateReadBy($end_at); }
    public function getServiceTimeAttribute($service_time){ return $this->secondsToReadable($service_time); }
    public function getTotalTimeAttribute($total_time){ return $this->secondsToReadable($total_time); }

    protected $dispatchesEvents = [
        'creating' => OrderItemServiceUserCreating::class,
        'created' => OrderItemServiceUserCreated::class
    ];

    private function getTimeToDateReadBy($time){
        if(!$time) return ''; $now = time();
        if($time > $now-(24*60*60)) return date('h:i a',$time);
        if($time > $now-(7*24*60*60)) return date('D, h:i a',$time);
        if($time > $now-(30*7*24*60*60)) return date('jS D',$time);
        if($time > $now-(12*30*7*24*60*60)) return date('D d/M',$time);
        return date('D d/M/Y',$time);
    }
    private function secondsToReadable($secs){
        if(!$secs) return '';
        if($secs < 60) return "{$secs} seconds"; $mins = $secs/60;
        if($mins < 60) return intval($mins) . " min," . intval($mins%60) . " sec"; $hrs = $mins/60;
        if($hrs < 24) return intval($hrs) . " hrs, " . intval($hrs%24) . " min"; $dys = $hrs/24;
        return intval($dys) . " days, " . intval($dys/7) . " hrs";
    }
}
