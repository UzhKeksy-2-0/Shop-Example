<?php
namespace CH\modificators\Namespacer;
/**
 * Namespacer
 * this class creates sitemap by composer and work with file sturcture by 
 * assoc array. 
 */
class Namespacer
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
        $configs = json_decode(file_get_contents($composerPath),true);
        // get only neccesary data
        $configs = $configs['autoload']['psr-4'];
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
    public function addNameSpace(string $namespace)
    {
        
    }
}

