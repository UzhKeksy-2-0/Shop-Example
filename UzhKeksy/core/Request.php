<?php
    namespace UK\core;
    class Request{
        public $l;
        public function getPath(){
            $path = $_SERVER["REQUEST_URI"] ?? '/';
            $position = strpos($path,'?');
            if($position === false){
                return $path;
            }
            return substr($path,0,$position);
        }
        public function getType(){
            if($this->getArg(1) == 'admin'){
                return 'admin';
            }
            return 'user';
        }
        public function getArg(int $index){
            $res = explode('/', parse_url(strtolower($_SERVER['REQUEST_URI']), PHP_URL_PATH));
            return $res[$index];
        }
        public function getArgs(){
            $res = explode('/', parse_url(strtolower($_SERVER['REQUEST_URI']), PHP_URL_PATH));
            array_shift($res);
            return $res;
        }
        public function getRequest(){
            return str_replace("/","",$_SERVER['REQUEST_URI']);
        }
    }