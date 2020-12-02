<?php
namespace UK;

use dbObject;

class UK_DataBase extends dbObject
{
    static public function connect($host = null, $login = null, $pass= null, $dbName = null, $port = null, $socket = null){
        new \MysqliDb($host, $login,$pass, $dbName, $port, $socket);
    }
}