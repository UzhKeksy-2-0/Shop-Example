<?php

namespace CH\basic;
/**
 * BC_Config
 * class that works with configs
 */
class BC_Config
{    
    private static $configs;
    public function __construct(array $configFiles)
    {
        foreach($configFiles as $configFile){
            array_push($this->configs,$configFile);
            
        }
    }
    public function addConfigurationFromJSON($fileName){
        $file = json_decode(file_get_contents($fileName));
        array_push(self::$configs,$file);
    }
}