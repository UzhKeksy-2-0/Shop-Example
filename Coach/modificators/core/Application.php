<?php

namespace CH\modificators\core;

use CH\basic\core\BC_Application;

class Application extends BC_Application
{
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }
    public function run()
    {
        $this->router->resolve();
    }
}
