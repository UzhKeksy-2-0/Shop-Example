<?php

namespace UK\basic;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use stdClass;

class UK_FileWorker
{
    public $path;
    public $files;
    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        require_once '../application/configs/path.config.php';
        /* if were given more arguments call other constructoe that is named 
                as constructor with num of arguments htat was given*/
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        } else {
            $this->__construct1(APPLICATION);
        }
    }
    /**
     *  __construct1 method
     *  @param $path
     */
    public function __construct1($path)
    {
        require_once '../application/configs/path.config.php';
        $this->path = $path;
        $all = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $tree = [];

        foreach ($all as $splFileInfo) {
            $file_name = $splFileInfo->getFilename();
            if ($file_name[0] === '.') {
                continue;
            }
            $path_parts = pathinfo($file_name);
            $path = $splFileInfo->isDir() ? array($file_name => array()) : [strtolower($path_parts['filename']) => $splFileInfo->getRealPath()];
            for ($depth = $all->getDepth() - 1; $depth >= 0; $depth--) {
                $path = array($all->getSubIterator($depth)->current()->getFilename() => $path);
            }
            $tree = array_merge_recursive($tree, $path);
        }
        $this->files = $this->array_to_object($tree);
    }
    /**
     * Method array_to_object
     *
     * @param $array $array [array to convert]
     *
     * @return void
     */
    private function array_to_object($array)
    {
        $obj = new stdClass;
        foreach ($array as $name => $value) {
            if (strlen($name)) {
                if (is_array($value)) {
                    $obj->{$name} = $this->array_to_object($value);
                } else {
                    $obj->{$name} = $value;
                }
            }
        }
        return $obj;
    }
}
