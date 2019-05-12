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