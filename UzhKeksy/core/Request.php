<?php
    namespace UK\core;

use UK\UK_Log;

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
        public function getArg(int $index){
            $res = explode('/', parse_url(strtolower($this->getPath()), PHP_URL_PATH));
            return $res[$index];
        }
        public function getArgs(){
            $res = explode('/', parse_url(strtolower($this->getPath()), PHP_URL_PATH));
            array_shift($res);
            return $res;
        }
        public function getRequest(){
            return str_replace("/","",$this->getPath());
        }
        public function getDataFromGet(){
            $data = $_GET;
            return $data;
        }
        public function getDataFromPost(){
            $data = $_POST;
            return $data;
        }
    }