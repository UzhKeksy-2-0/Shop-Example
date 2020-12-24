<?php

namespace CH\basic\core;

use CH\basic\BC_FilePather;
use Exception;
use CH\modificators\File\FilePather\CH_FilePather;
use CH\modificators\Logs\CH_Log;

class BC_Router
{

    public BC_Request $request;
    public CH_FilePather $controllers;
    protected array $staticRoutes = [];    
    /**
     * __construct
     *
     * @param  mixed $request
     * @return void
     */
    public function __construct(BC_Request $request)
    {
        $this->controllers = new CH_FilePather(CONTROLLERS);
        $this->request = $request;
    }
    /**
     * Method setStaticRoute
     *
     * @param $link $link [link that is parsed ]
     * @param $type $type [admin or user]
     * @param $controller $controller [controller name]
     *
     * @return void
     */
    public function setStaticRoute($link, $controller)
    {
        $this->staticRoutes[$link] = $controller;
    }
    /**
     * Method resolve
     *
     * @return void
     */
    public function resolve($goTo = null)
    {
        $GetPostData = [];
        $GetPostData['get'] = $this->request->getDataFromGet();
        $GetPostData['post'] = $this->request->getDataFromPost();
        $pather = (object) $this->controllers->files;
        if($goTo == null){
            if (($this->staticRoutes[$this->request->getPathWithoutFirstSlash()])) {
                $path = $this->staticRoutes[$this->request->getPathWithoutFirstSlash()];
                $path = explode('/', $path);
            }else if($this->staticRoutes[$this->request->getPath()]){
                $path = $this->staticRoutes[$this->request->getPath()];
                $path = explode('/', $path);
            } 
            else {
                $path = $this->request->getArgs();
            }
        }else{
            $pather->$goTo;
        }
        foreach ($path as $path_) {
            $pather =  $pather->{$path_};
        }
        $classFile = $pather;
        if (file_exists($classFile)) {
            require $classFile;
        } else {
            throw new Exception('', 404);
        }
        $class = (object) BC_FilePather::getClassObjectFromFile($classFile);
        $class->run($GetPostData);
    }
    
}
