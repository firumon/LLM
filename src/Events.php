<?php

    namespace Firumon\LLM;

    use Illuminate\Support\Facades\Event;

    use Firumon\LLM\Events as LLMEvents;
    use Firumon\LLM\Listeners;

    class Events extends Event
    {
        private $bindings = [
            LLMEvents\LLMUserCreated::class => Listeners\AddUserToGroups::class,
            LLMEvents\EmployeeCreated::class => Listeners\AddUserToGroups::class,
            LLMEvents\NewDefaultShelf::class => Listeners\DeleteAllDefaultShelfOfAHub::class,
            LLMEvents\OrderCreating::class => Listeners\SetOrderAttributes::class,
            LLMEvents\OrderCreated::class => Listeners\CreateInvoiceForOrderIfNotExists::class,
            LLMEvents\OrderUpdating::class => Listeners\UpdateInvoiceItemPricesIfPLChanged::class,
            LLMEvents\OrderItemCreated::class => Listeners\SetOrderItemAttributes::class,
            LLMEvents\OrderItemServiceUserCreating::class => Listeners\SetOrderItemServiceUserAttributes::class,
            LLMEvents\OrderItemServiceUserCreated::class => Listeners\UpdateOrderItemServiceStatus::class,
            LLMEvents\HubShiftUpdated::class => Listeners\UpdateShiftItemsHub::class,
            LLMEvents\EmployeeUpdating::class => Listeners\SetAssignDetailsForNewlyAddedTasks::class,
            LLMEvents\OrderItemServiceUpdating::class => Listeners\UpdateOderItemServiceProgressOnAssignDetails::class,
            LLMEvents\OrderItemServiceUserUpdated::class => Listeners\OISUSetAttributeAndUpdateProgress::class,
        ];

        public static function Register(){
            return new self();
        }

        public function __construct()
        {
            foreach($this->bindings as $event => $listeners)
                $this->bindEvent($event,$listeners);
        }

        private function bindEvent($event,$listeners){
            if(!is_array($listeners)) Event::listen($event,$listeners);
            else foreach($listeners as $listener) $this->bindEvent($event,$listener);
        }

    }