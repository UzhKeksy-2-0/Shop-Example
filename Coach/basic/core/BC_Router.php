<?php

namespace CH\basic\core;

use app\configs\php\Path;
use CH\basic\BC_FilePather;
use Exception;
use CH\modificators\Logs\CH_Log;

class BC_Router
{    
    /**
     * request
     * request work (gets all data from request)
     * @var BC_Request
     */
    public BC_Request $request;    
    /**
     * controllers
     * path to controllers folder (made with using BC_Filepather)
     * @var BC_FilePather
     */
    public BC_FilePather $controllers;    
    /**
     * staticRoutes
     * array of static routes (static routes - routes that run without controller file)
     * @var array
     */
    protected array $staticRoutes = [];    
    /**
     * __construct
     *
     * @param  mixed $request
     * @return void
     */
    public function __construct(BC_Request $request)
    {
        Path::setPathConfiguration();
        $this->controllers = new BC_FilePather(Path::CONTROLLERS());
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
     * gets data from request (query, POST, GET) and 
     * according to request uses such controller and runs it
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
                $path = explode(DIRECTORY_SEPARATOR, $path);
            }else if($this->staticRoutes[$this->request->getPath()]){
                $path = $this->staticRoutes[$this->request->getPath()];
                $path = explode(DIRECTORY_SEPARATOR, $path);
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
