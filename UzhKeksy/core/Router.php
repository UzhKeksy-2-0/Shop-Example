<?php

namespace UK\core;

use Exception;
use UK\modificators\UK_FileWorker;
use UK\modificators\UK_Log;

class Router
{

    public Request $request;
    public UK_FileWorker $controllers;
    protected array $staticRoutes = [];
    public function __construct(Request $request)
    {
        $this->controllers = new UK_FileWorker(CONTROLLERS);
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
    public function resolve()
    {
        $GetPostData = [];
        array_push($GetPostData, $this->request->getDataFromGet());
        array_push($GetPostData, $this->request->getDataFromPost());
        $pather = (object) $this->controllers->files;
        if ($this->staticRoutes[$this->request->getRequest()]) {
            $path = $this->staticRoutes[$this->request->getRequest()];
            $path = explode('/', $path);
        } else {
            $path = $this->request->getArgs();
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
        $class = (object) $this->getClassObjectFromFile($classFile);
        $class->pageLoad($GetPostData);
    }
    /**
     * Method getClassFullNameFromFile
     * gets full class name from file
     * @param $filePathName $filePathName [file path]
     *
     * @return void
     */
    private function getClassFullNameFromFile($filePathName)
    {
        return $this->getClassNamespaceFromFile($filePathName) . '\\' . $this->getClassNameFromFile($filePathName);
    }


    /**
     * Method getClassObjectFromFile
     *  build and return an object of a class from its file path
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    private function getClassObjectFromFile($filePathName)
    {
        $classString = $this->getClassFullNameFromFile($filePathName);
        $object = new $classString;
        return $object;
    }

    /**
     * Method getClassNamespaceFromFile
     *
     * get the class namespace form file path using token
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    protected function getClassNamespaceFromFile($filePathName)
    {
        $src = file_get_contents($filePathName);
        $tokens = token_get_all($src);
        $count = count($tokens);
        for ($i = 0, $namespace_ok = false, $namespace = ''; $i < $count; ++$i) {
            $token = $tokens[$i];
            if ((is_array($token)) && ($token[0] === T_NAMESPACE)) {
                while (++$i < $count) {
                    if ($tokens[$i] === ';') {
                        $namespace_ok = true;
                        $namespace = trim($namespace);
                        return $namespace_ok ? $namespace : null;
                    }
                    $namespace .= is_array($tokens[$i]) ? $tokens[$i][1] : $tokens[$i];
                }
            }
        }
    }

    /**
     * Method getClassNameFromFile
     *
     * get the class name form file path using token
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    protected function getClassNameFromFile($filePathName)
    {
        $php_code = file_get_contents($filePathName);
        $classes = [];
        $tokens = token_get_all($php_code);
        $count = count($tokens);
        for ($i = 0; $i < $count; $i++) {
            if (($tokens[$i - 2][0] == T_CLASS) && ($tokens[$i - 1][0] == T_WHITESPACE) && ($tokens[$i][0] == T_STRING)) {
                $class_name = $tokens[$i][1];
                $classes[] = $class_name;
            }
        }
        return $classes[0];
    }
}
