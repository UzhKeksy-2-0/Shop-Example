<?php
namespace UK;

use dbObject;

class UK_DataBase extends dbObject
{
    
    static public function connect($host = null, $login = null, $pass= null, $dbName = null, $port = null, $socket = null){
        new \MysqliDb($host, $login,$pass, $dbName, $port, $socket);
    }
    static public function connectByController(UK_Controller $controller){
        include $controller->database_file;
        (new UK_Log)->log($defaultDB,null, true);
        if(isset($defaultDB)){
           // (new UK_Log)->log('ho');
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