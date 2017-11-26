<?php

return [
    'driver' => env('MAIL_DRIVER',' smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 465),
    'from' => ['address' => 'no-contestar@corrientes.gov.ar', 'name' => 'LDAP WEB'],
    'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false
    
];