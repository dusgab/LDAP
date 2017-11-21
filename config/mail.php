<?php

return [
    'driver' => env('MAIL_DRIVER',' smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'no-contestar@corrientes.gov.ar', 'name' => 'LDAP WEB'],
    'encryption' => env('MAIL_ENCRYPTION', ''),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
    'stream' => [
		'ssl' => [
		    'allow_self_signed' => true,
		    'verify_peer' => false,
		    'verify_peer_name' => false,
		],
	],
    
];