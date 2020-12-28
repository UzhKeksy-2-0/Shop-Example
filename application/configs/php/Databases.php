<?php
namespace app\configs\php;

use CH\modificators\Config\CH_Configs;

class Databases extends CH_Configs
{
    public static function setDataBasesConfiguration()
    {
        self::DEFAULT([
                'hostName' => 'localhost',
                'login' => 'root',
                'pass' => 'root',
                'dbName' => 'flower_shop',
                'dbdriver' => 'mysqli',
                'port'=>'3306',
        ]);
    }
}