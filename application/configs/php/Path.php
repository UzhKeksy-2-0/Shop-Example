<?php
namespace app\configs\php;

use CH\modificators\Config\CH_Configs;

class Path extends CH_Configs
{
    public static $fileName = '';
    public static function setPathConfiguration()
    {
        self::setConfiguration('ROOT', dirname($_SERVER['DOCUMENT_ROOT']).DIRECTORY_SEPARATOR);
        self::setConfiguration('APPLICATION', self::ROOT() .'application'.DIRECTORY_SEPARATOR);
        self::setConfiguration('PUBLIC', self::ROOT() . 'public'. DIRECTORY_SEPARATOR);
        self::setConfiguration('VENDOR',self::ROOT() . 'vendor' . DIRECTORY_SEPARATOR);
        self::setConfiguration('VIEWS',self::APPLICATION() . 'views' . DIRECTORY_SEPARATOR);
        self::setConfiguration('CONFIGS',self::APPLICATION() . 'configs' . DIRECTORY_SEPARATOR);
        self::setConfiguration('CONTROLLERS',self::APPLICATION() . 'controllers' . DIRECTORY_SEPARATOR);
        self::setConfiguration('CORE',self::APPLICATION() . 'core' . DIRECTORY_SEPARATOR);
        self::setConfiguration('MODELS',self::APPLICATION() . 'models' . DIRECTORY_SEPARATOR);
        self::setConfiguration('LOGS',self::APPLICATION() . 'logs' . DIRECTORY_SEPARATOR);
        self::setConfiguration('ERROR',self::LOGS() . 'error.log');
        self::setConfiguration('LOG',self::LOGS() . 'log.log');
        self::setConfiguration('WARNING',self::LOGS() . 'warning.log');
        self::setConfiguration('DB_CONFG',self::ROOT() . 'database.config.php');
        self::setConfigFile(self::CONFIGS() . 'json' . DIRECTORY_SEPARATOR . 'path.json');
    }
}