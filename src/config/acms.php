<?php

return [
    
    'url' => env('ACMS_APP_URL','http://127.0.0.1/api/'),
    'token' => env('ACMS_APP_TOKEN',null),
    'key' => env('ACMS_APP_KEY',null),

    'acms_id'=>'id_number',
    'app_id'=>'id_number',

    'mapping'=>[
        'id_number'=>'id_number', 
        'first_name'=>'first_name', 
        'middle_name'=>'middle_name', 
        'last_name'=>'last_name', 
        'full_name'=>'name',
        'contact'=>'contact', 
        'email'=>'email', 
        'position'=>'position', 
        'section'=>'section', 
        'department'=>'department', 
        'factory'=>'factory', 
        'username'=>'username', 
        'password'=>'password', 
        'active'=>null,
        'updated_at'=>'updated_at',
        'created_at'=>'created_at',
        'deleted_at'=>null,
    ],
    'extra_mapping'=>[
        'sample'=>null,
    ],
    
];
