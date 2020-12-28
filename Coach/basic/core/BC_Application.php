<?php

namespace CH\basic\core;

class BC_Application
{    
    /**
     * request
     * BC_Request class oject
     * @var mixed
     */
    public  $request;    
    /**
     * router
     * BC_Router class object
     * @var mixed
     */
    public  $router;    
    /**
     * __construct
     * creates application (but not starts it), starts Router work
     * @return void
     */
    public function __construct()
    {
        $this->request = new BC_Request();
        $this->router = new BC_Router($this->request);
    }    
    /**
     * run
     * start application
     * @return void
     */
    public function run()
    {
        $this->router->resolve();
    }
}
