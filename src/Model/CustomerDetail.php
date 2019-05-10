<?php

namespace Firumon\LLM\Model;

use Firumon\LLM\Events\CustomerCreated;
use Illuminate\Database\Eloquent\Builder;
use Milestone\Appframe\Model\User as AppframeUser;

class CustomerDetail extends AppframeUser
{
    protected $table = 'customer_details';
}
