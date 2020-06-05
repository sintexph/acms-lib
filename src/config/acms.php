<?php

return [
    
    'url' => env('ACMS_APP_URL','http://127.0.0.1:8000/api/'),
    'token' => env('ACMS_APP_TOKEN','Gc5XSsWSRSpEdZc8n66NUQ6LtUoXyMYHUZLQAcvO1234ttyu'),
    'key' => env('ACMS_APP_KEY','000000000001'),

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
    ],
    'extra_mapping'=>[
        'sample'=>null,
    ],
    
];