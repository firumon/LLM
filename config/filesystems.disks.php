<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Storage disk
    |--------------------------------------------------------------------------
    |
    | Defines a storage disk where all uploaded file of LLM to be stored
    |
    */
    'driver' => 'local',
    'root' => public_path('uploads'),
    'url' => env('APP_URL').'/uploads/',
    'visibility' => 'public',

];