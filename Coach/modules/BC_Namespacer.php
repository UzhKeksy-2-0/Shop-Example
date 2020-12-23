<?php
namespace CH\modules;

use CH\modificators\Log\CH_Log;
use Exception;

/**
 * BC_Namespacer
 * this class creates sitemap by composer and work with file sturcture by 
 * assoc array. 
 */
class BC_Namespacer
{
    public static string $composerPath;
    /**
     * createConfigFile
     * creates config file by composer. gets only parents namespaces
     * @param  string $composerPath
     * @param  string $result
     * @return array asoc all parent configs
     */
    public static function createConfigFile(string $result = './namespaces.json')
    {
        $configs = self::getParentNameSpaces();
        file_put_contents($result,json_encode($configs));
        return $configs;
    }        
    /**
     * getParentNameSpaces
     * returns parent namespaces using composer
     * IMPORTANT static value $composerPath has to be initilazed !
     * @return array
     */
    public static function getParentNameSpaces(): array{
        $configs = json_decode(file_get_contents(self::$composerPath),true);
        // get only neccesary data
        $configs = $configs['autoload']['psr-4'];
        foreach($configs as $key => $value){
            unset($configs[$key]);
            $configs[stripslashes($key)] = $value;
        }
        foreach($configs as $key => $value){
            $configs[$key] = explode('/',$value)[0];
        }
        return $configs;
    }    
    /**
     * generateNameSpaceByPath
     * generates and returns namespace according to given path
     * @param  mixed $path
     * @return void
     */
    public static function generateNameSpaceByPath(string $path):string{
        $parentNamespaces = self::getParentNameSpaces($path);
        $path = explode('/',$path);
        $result =  '';
        $number = null;
        foreach($path as $num => $subPath){
            foreach($parentNamespaces as $key =>$parentNamespace){
                if($subPath == $parentNamespace){
                    $number = $num;
                    $result = $key;
                }
            }
        }
        if($result == ''){
            throw new Exception('Wrond Path');
        } else {
            for($i = $number + 1; $i < count($path); ++$i){
                $result .= "\\".$path[$i];
            }
        }
        return $result;
    }
}
