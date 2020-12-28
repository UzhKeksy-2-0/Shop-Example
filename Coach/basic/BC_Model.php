<?php
namespace CH\basic;

use RedBeanPHP\R;

class BC_Model
{    
    /**
     * tableName
     * name of table in database
     * @var mixed
     */
    public static $tableName;        
    /**
     * connectByConfig
     * connects to database by setted config
     * @param  mixed $config
     * @return void
     */
    public static function connectByConfig(BC_Config $config)
    {
        self::connect($config::DB_DRIVER(), $config::HOST(), $config::DB_NAME(), $config::LOGIN(), $config::PASS());
    }
    /**
     * connect
     *  sets connection to data base
     * @return void
     */
    public static function connect(string $dbProvider,string $host, string $dbName, string $userLogin, string $userPass)
    {
        $dbProvider = strtolower($dbProvider);
        if($dbProvider == 'mysqlite')
        {
            R::setup('sqlite');
        }
        else{
            R::setup($dbProvider.':host='.$host.';dbname='.$dbName,$userLogin, $userPass);
        }
    }
}