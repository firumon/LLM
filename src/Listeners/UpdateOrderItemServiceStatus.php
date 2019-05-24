<?php

namespace Firumon\LLM\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateOrderItemServiceStatus implements ShouldQueue
{
    private $progressMap = [
        'New' => ['New','New'],
        'Assigned' => ['In Service','In Service'],
        'Processing' => ['In Service','In Service'],
        'Completed' => ['Service Completed','Service Completed'],
        'Awaiting' => ['New','New']
    ];
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $OISU = $event->orderItemServiceUser->fresh(['OIS.Assigned']);
        list($assigned_on,$start_at,$end_at) = [$OISU->getOriginal('assigned_on'),$OISU->getOriginal('start_at'),$OISU->getOriginal('end_at')];
        if($end_at > 0){
            $progress = ($OISU->OIS->Assigned->every(function ($oisu) {
                return ($oisu->getOriginal('end_at') > 0);
            })) ? 'Completed' : 'Processing';
        }
        elseif($start_at > 0) $progress = 'Processing';
        elseif($assigned_on > 0) $progress = 'Assigned';
        else $progress = 'New';

        $OISU->OIS->progress = $progress;
        $OISU->OIS->OrderItem->progress = $this->progressMap[$progress][0];
        $OISU->OIS->OrderItem->Order->progress = $this->progressMap[$progress][1];
        $OISU->push();
    }
}
