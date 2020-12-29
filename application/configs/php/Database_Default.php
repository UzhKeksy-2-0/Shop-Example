<?php
namespace app\configs\php;

use CH\modificators\Config\CH_Configs;

class Database_Default extends CH_Configs
{
    public static function setDatabaseConfiguration()
    {
        self::HOST_NAME('localhost');
        self::LOGIN('root');
        self::PASS('');
        self::DB_NAME('flower_shop');
        self::DB_DRIVER('mysql');
        self::PORT(8088);
    }
}