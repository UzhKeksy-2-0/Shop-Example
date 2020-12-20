<?php

namespace CH\modificators\core;

use Exception;
use CH\basic\core\BC_Router;
use CH\modificators\FilePather\CH_FilePather;
use CH\modificators\Log\CH_Log;

class Router extends BC_Router
{
    private $virtualControllers;
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->virtualControllers = [];
    }
    public function addVirtualController(Array $virtualControllers){
        array_push($this->virtualControllers, $virtualControllers);
    }
    private function getVirtualControllerByName($virtualControllerName){
        $controllers = $this->virtualControllers;
        foreach($controllers as $controller){
            if($controller['name'] == $virtualControllerName){
                return $controller;
            }
        }
    }
    public function resolve()
    {
        $path = $this->request->getPath();
        $virtualController = $this->getVirtualControllerByName($path);
        if($virtualController != null){
            $GetPostData = [];
            array_push($GetPostData, $this->request->getDataFromGet());
            array_push($GetPostData, $this->request->getDataFromPost());
           $virtualController['func']($GetPostData);    
        }
        $pathNoSlashes = $this->request->getPathWithoutFirstSlash();
        $virtualControllerNoSlashes = $this->getVirtualControllerByName($pathNoSlashes);
        if($virtualControllerNoSlashes != null){
            $GetPostData = [];
            array_push($GetPostData, $this->request->getDataFromGet());
            array_push($GetPostData, $this->request->getDataFromPost());
            $virtualControllerNoSlashes['func']($GetPostData);
        }
        else{
           parent::resolve();
        }
    }
}
