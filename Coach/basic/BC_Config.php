<?php
namespace CH\basic;
class BC_Config 
{    
    /**
     * fileName
     * contains name of configuration file 
     * @static mixed
     */
    protected static $fileName;
    /** 
    * configs
    * all local configs
    * Is private because we have to save thei value.
    * If it was public in one time we would be able to change it 
    * @static array
    */
    private static array $configs;    
    /**
     * setConfigFile
     * sets config file (if it is not setted)
     * returns true if file was added. If not returns false 
     * (file not exist or variable is set yet)
     * @param  string $pathToFile
     * @return bool
     */
    public static function setConfigFile(string $pathToFile):bool
    {
        if(isset(self::$fileName)){
            return false;
        }
        self::$fileName = $pathToFile;
        return true;
    }    
    /**
     * addToConfig
     * adds config to local configs array
     * @param  mixed $ConfigName
     * @param  mixed $value
     * @return void
     */
    public static function setConfiguration(string $ConfigName, $value)
    {
        self::$configs[$ConfigName] = $value;
    }    
    /**
     * getConfigsFirmFile
     * gets configs from file and set them to array
     * retunrs true if all ok, and false ifthere was some problem
     * (file does not exits, fileName is not setted)
     * @param  mixed $fileName
     * @return bool
     */
    public static function getConfigsFromFile(): bool
    {
        // if file name is not set reutrn false
        if(!isset(self::$fileName))
        {
            return false;
        }
        self::$configs = json_decode(file_get_contents(self::$fileName));
    }    
    /**
     * setConfigsToFile
     * sets local congfigs to file. If file is not exist or there are not configs returns false
     * @return bool
     */
    public static function setConfigsToFile():bool
    {
        if((isset(self::$configs))&&(isset(self::$fileName)))
        {
            echo self::$fileName;
            file_put_contents(self::$fileName,json_encode(self::$configs));
            // file_put_contents('data.d','puk');
        }
        return false;
    }    
    /**
     * __get
     * returns value if it is possible if not returns null
     * @param  mixed $name
     * @return void
     */
    public static function __callStatic($name, $arguments)
    {
        if((isset($arguments))&& $arguments != null){
            return self::$configs[$name] = $arguments;
        }
        if(self::$configs == null)
        {
            self::getConfigsFromFile();
        }
        return self::$configs[$name];
    }    
}