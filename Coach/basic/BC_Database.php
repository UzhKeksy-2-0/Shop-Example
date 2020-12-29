<?php
namespace CH\basic;

use RedBeanPHP\R;

class BC_Database extends R
{    
    /**
     * tableName
     * name of table in database
     * @var mixed
     */
    protected static $tableName;            
    /**
     * relationShip
     * contains all relationship (OneToMany, ManyToMany...)
     * @static @var mixed
     */
    protected static $relationShip;    
    /**
     * tables
     *
     * @var mixed
     */
    private static $tables;
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
     *
     * @param  mixed $dbProvider
     * @param  mixed $host (If sqlite - path)
     * @param  mixed $dbName (If sqlite - null)
     * @param  mixed $userLogin
     * @param  mixed $userPass
     * @param  mixed $port
     * @return void
     */
    public static function connect(string $dbProvider,string $host, string $dbName, string $userLogin, string $userPass, $port = 3306)
    {
        $dbProvider = strtolower($dbProvider);
        if($dbProvider == 'sqlite')
        {
            self::setup('sqlite:'.$host,$userLogin, $userPass);
        }
        else{
            self::setup($dbProvider.':host='.$host.';dbname='.$dbName,$userLogin, $userPass);
            // self::setup($dbProvider.':host='.$host.';port='.$port.';dbname='.$dbName,$userLogin, $userPass);
        }
    }    
    /**
     * get
     * gets connecion to table
     * @param  mixed $num
     * @param  mixed $alwaysReturnArray
     * @return void
     */
    public static function get($num = 1, $alwaysReturnArray = FALSE)
    {
        // self::dispense(self::$tableName,$num,$alwaysReturnArray);
        self::dispense('product');
    }
    
    /**
     * save
     * saves data of object
     * @return void
     */
    public function save()
    {
        self::store($this);
    }
}