<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Admin' => $baseDir . '/plugins/Admin/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BasicAdmin' => $baseDir . '/plugins/BasicAdmin/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];