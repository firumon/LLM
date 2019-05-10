<?php

namespace Firumon\LLM\Model;

use Milestone\Appframe\Model\Model as AppframeModel;

class Model extends AppframeModel
{
    public $storage = [
        ['disk' => 'llm','path' => 'hub_images','form' => '2110105']
    ];

    public function scopeActive($q){ return $q->where('status','Active'); }
}
