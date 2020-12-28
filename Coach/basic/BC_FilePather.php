<?php

namespace CH\basic;

use app\configs\php\Path;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use stdClass;

class BC_FilePather
{    
    /**
     * path
     * 
     * @var mixed
     */
    public $path;    
    /**
     * files
     *
     * @var mixed
     */
    public $files;
    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        Path::setPathConfiguration();
        /* if were given more arguments call other constructoe that is named 
                as constructor with num of arguments htat was given*/
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        } else {
            $this->__construct1(Path::APPLICATION());
        }
    }
    /**
     *  __construct1 method
     * if [path is given]
     *  @param $path
     */
    public function __construct1($path)
    {
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

    /**
     * Method getClassFullNameFromFile
     * gets full class name from file
     * @param $filePathName $filePathName [file path]
     *
     * @return void
     */
    private static function getClassFullNameFromFile($filePathName)
    {
        return self::getClassNamespaceFromFile($filePathName) . '\\' . self::getClassNameFromFile($filePathName);
    }


    /**
     * Method getClassObjectFromFile
     *  build and return an object of a class from its file path
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    public static function getClassObjectFromFile($filePathName)
    {
        $classString = self::getClassFullNameFromFile($filePathName);
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
    public static function getClassNamespaceFromFile($filePathName)
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
    public static function getClassNameFromFile($filePathName)
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
