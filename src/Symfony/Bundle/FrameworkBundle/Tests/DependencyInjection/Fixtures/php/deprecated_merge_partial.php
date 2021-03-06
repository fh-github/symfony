<?php

$container->loadFromExtension('framework', array(
    'secret' => 's3cr3t',
    'session' => array(
        'auto_start'        => true,
        'storage_id'        => 'session.storage.native_file',
        'name'              => '_SYMFONY',
        'lifetime'          => 2012,
        'path'              => '/sf2',
        'domain'            => 'sf2.example.com',
        'secure'            => false,
        'cookie_lifetime'   => 86400,
        'cookie_path'       => '/',
        'cookie_httponly'   => true,
    ),
));

