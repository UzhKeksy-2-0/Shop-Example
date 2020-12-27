<?php
namespace app\configs\php;

use CH\modificators\Config\CH_Configs;

class Plugin  extends CH_Configs
{
    const Data = 'data';
    public function __construct()
    {
        self::setConfigsToFile();
    }
}