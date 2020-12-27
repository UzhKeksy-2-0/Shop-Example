<?php
namespace CH\basic;

use RedBeanPHP\R;

class BC_Model
{
    public static $tableName;    
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