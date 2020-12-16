<?php

use CH\modificators\Log\CH_Log;
use CH\modificators\Namespacer\Namespacer;

require_once './bootsrap.php';
$data = new Namespacer('./namespaces.json');
$log = new CH_Log;
$log->log($data->getNamespaces(),null , true);
// $log->log($data->createConfigFile('../composer.json'),null ,true);