<?php

use Cake\Core\Configure;

$instaConfig = [
    'apiEndpoint' => 'https://api.instagram.com',
    'apiVersion' => 'v1'
];

Configure::write('Instagram', $instaConfig);
