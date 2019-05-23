<?php

namespace Firumon\LLM\Controller;

class OrderItemServiceUserController extends Controller
{

    public function currentStartAtDateTime($form_id,$field_id,$data){ $this->setCurrentDateTimeDependentValue($form_id,'start_at'); }
    public function currentEndAtDateTime($form_id,$field_id,$data){ $this->setCurrentDateTimeDependentValue($form_id,'end_at'); }

}
