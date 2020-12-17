<?php

use CH\modificators\Log\CH_Log;
use CH\modificators\Namespacer\Namespacer;

require_once './bootsrap.php';
$data = new Namespacer();
$log = new CH_Log;
// $log->log($data->getNamespaces(),null , true);
$log->log($data->createConfigFile('../composer.json'),null ,true);
$arry1 = [
    'home' => 'data'
];
$home = [
    'home'=> [
        'data' => 'wow'
    ]
];
array_push($arry1,$home);
$log->log($arry1, null, true);