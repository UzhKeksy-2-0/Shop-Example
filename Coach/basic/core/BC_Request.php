<?php

namespace CH\basic\core;


class BC_Request
{
    public $l;    
    /**
     * getPath
     * retunrs query string all arguents like string with slashes
     * @return void
     */
    public function getPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? DIRECTORY_SEPARATOR;
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }    
    public function getPathWithoutFirstSlash(){
        $query = $this->getPath();
        return substr($query,1);
    }
    /**
     * getArg
     * gets from query argument by index
     * @param  mixed $index
     * @return void
     */
    public function getArg(int $index)
    {
        $res = explode(DIRECTORY_SEPARATOR, parse_url(strtolower($this->getPath()), PHP_URL_PATH));
        return $res[$index];
    }    
    /**
     * getArgs
     * returns arguments from seqrch query with like  array
     * @return void
     */
    public function getArgs()
    {
        $res = explode(DIRECTORY_SEPARATOR, parse_url(strtolower($this->getPath()), PHP_URL_PATH));
        array_shift($res);
        return $res;
    }    
    /**
     * getRequest
     * returns request with no slashes
     * @return void
     */
    public function getRequest()
    {
        return str_replace("/", "", $this->getPath());
    }    
    /**
     * getDataFromGet
     * return data from get type
     * @return void
     */
    public function getDataFromGet()
    {
        $data = $_GET;
        return $data;
    }    
    /**
     * getDataFromPost
     * retunrs data from post method
     * @return void
     */
    public function getDataFromPost()
    {
        $data = $_POST;
        return $data;
    }
}
