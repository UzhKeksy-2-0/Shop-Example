<?php

namespace UK\basic\core;

class BC_Application
{
    public BC_Request $request;
    public BC_Router $router;
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
