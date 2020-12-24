<?php

namespace CH\modificators\core;

use CH\basic\core\BC_Application;

class Application extends BC_Application
{
    private static $count = 0;
    private function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }
    public static function createApplication(){
        if(!self::$count){
            return new Application();
        }
    }
    public function run()
    {
        $this->router->resolve();
    }
}
