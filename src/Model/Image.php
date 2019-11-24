<?php

namespace Firumon\LLM\Model;

//use Illuminate\Database\Eloquent\Model;
use Milestone\Appframe\Model\Model;

class Image extends Model
{
    protected $table = 'images';
    public $storage = [
        ['disk' => 'llm', 'path' => 'images']
    ];
    public $files = ['image1','image2','image3'];
}
