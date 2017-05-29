<?php

use Cake\Core\Configure;

$instaConfig = [
    'apiEndpoint' => 'https://api.instagram.com',
    'apiVersion' => 'v1',
    'clientId' => '45f736e2839f4b2087a4c059816b07bf',
	'clientSecret' => '29a5053cf1124df2ba7de4b1541f83b3',
	'redirectUri' => 'http://localhost/kvcms/cakeapp/admin/insta/response'
];


Configure::write('Admin.config', $instaConfig);
