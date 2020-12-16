<?php
namespace CH\basic\core;

use CH\modificators\Log\CH_Log;

/**
 * BC_Namespacer
 * this class creates sitemap by composer and work with file sturcture by 
 * assoc array. 
 */
class BC_Namespacer
{
    private $namespaces;    
    private $parentNamespace;
    public function __construct()
    {
        /* if were given more arguments call other constructoe that is named 
        as constructor with num of arguments htat was given*/
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $function = '__construct' . $numberOfArguments)) 
        {
            call_user_func_array(array($this, $function), $arguments);
        } else 
        {
            // get data from file. But we have to take all namespaces and parentNamespaces
            $fileData = json_decode(file_get_contents(__DIR__.'/namespaces.json'),true);

        }
    }    
    /**
     * __construct1
     * creates configs by cinfig file
     * @param  mixed $configFile
     * @return void
     */
    public function __construct1($configFile)
    {
        $this->namespaces = json_decode(file_get_contents($configFile),true);
    }    
    /**
     * createConfigFile
     * creates config file by composer. gets only parents namespaces
     * @param  string $composerPath
     * @param  string $result
     * @return array asoc all parent configs
     */
    public static function createConfigFile(string $composerPath, string $result = './namespaces.json')
    {
        // get data from composer. We do it to take all parent namespaces that are static
        $log = new CH_Log;
        $configs = json_decode(file_get_contents($composerPath),true);
        // get only neccesary data
        $configs = $configs['autoload']['psr-4'];
        foreach($configs as $key => $value){
            unset($configs[$key]);
            // $value = stripslashes($value);
            $configs[stripslashes($key)] =$value;
        }
        foreach($configs as $key => $value){
            $configs[$key] =explode('/',$value)[0];
            // $configs[$key] =str_replace("\\",'',$value);
        }
        //$configs = stripslashes($configs);
        //  write complete data to file
        file_put_contents($result,json_encode($configs));
        return $configs;
    }    
    /**
     * addNameSpace
     * only add namespace
     * @param  mixed $namespace
     * @return void
     */
    public function addNameSpaceByName(string $namespaceName)
    {
        $namespaces = explode("\\",$namespaceName);
        array_push($this->namespaces,$namespaces);
    }


    /**
     * Get the value of namespaces
     */ 
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * Set the value of namespaces
     *
     * @return  self
     */ 
    public function setNamespaces($namespaces)
    {
        $this->namespaces = $namespaces;
        return $this;
    }

    /**
     * Get the value of parentNamespace
     */ 
    public function getParentNamespace()
    {
        return $this->parentNamespace;
    }

    /**
     * Set the value of parentNamespace
     *
     * @return  self
     */ 
    public function setParentNamespace($parentNamespace)
    {
        $this->parentNamespace = $parentNamespace;
        return $this;
    }
}

