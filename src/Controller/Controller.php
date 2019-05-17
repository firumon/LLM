<?php

namespace Firumon\LLM\Controller;

use Milestone\Appframe\Controllers\BaseController\BaseController;
use Milestone\Appframe\Bag;

class Controller extends BaseController
{
    protected $bag;

    public function __construct()
    {
        $this->bag = resolve(Bag::class);
    }

    public function getCurrentDateDependentValue($form_id){ $this->setDependValue($form_id,'date',date('Y-m-d')); }
    public function setDependValue($form,$field,$value){ $this->bag->store('DependValue',$form,[$field => $value],true); }
}
