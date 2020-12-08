<?php
namespace UK\basic;

use dbObject;

class UK_DataBase extends dbObject
{
        
    /**
     * Method connect
     *  
     * 
     * @param $host $host [data base host name]
     * @param $login $login [data base user login]
     * @param $pass $pass [data base user pass]
     * @param $dbName $dbName [data base name]
     * @param $port $port [data base port]
     * @param $socket $socket [data base socket]
     *
     * @return void
     */
    static public function connect($host = null, $login = null, $pass = null, $dbName = null, $port = null, $socket = null){
        new \MysqliDb($host, $login,$pass, $dbName, $port, $socket);
    }    
    /**
     * Method connectByController
     * function gets data to connect from databese config file
     * path to this file is gotten from controller object by value database_file
     * 
     * @param UK_Controller $controller [controller object]
     *
     * @return void
     */
    static public function connectByController(UK_Controller $controller){
        include $controller->database_file;
        if(isset($defaultDB)){
            $host = $defaultDB['hostName'];
            $login = $defaultDB['login'];
            $pass  = $defaultDB['pass'];
            $dbName = $defaultDB['dbName'];
            $port = $defaultDB['port'];
            $socket = $defaultDB['socket'];
            new \MysqliDb($host, $login,$pass, $dbName, $port, $socket);
        }
    }
}