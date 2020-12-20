<?php

namespace CH\basic\core;

class BC_Application
{
    public  $request;
    public  $router;
    public function __construct()
    {
        $this->request = new BC_Request();
        $this->router = new BC_Router($this->request);
    }
    public function run()
    {
        $this->router->resolve();
    }
}
