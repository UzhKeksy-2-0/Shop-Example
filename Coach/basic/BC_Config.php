<?php

namespace CH\basic;


/**
 * BC_Config
 * class that works with configs
 */
class BC_Config
{    
    const Data = '';
    /**
     * getConfigFromFile
     *
     * @param  mixed $filePath
     * @return void
     */
    public static function getConfigFromFile($filePath){
        $before = get_defined_constants(true);
        include_once($filePath);
        $after = get_defined_constants(true);
        if ( isset($after['user']) ) {
            if ( isset($before['user']) ) {
                $current = array_diff_assoc($after['user'],$before['user']);
            }else{
                $current = $after['user'];
                //
                
            }
            foreach($current as $name => $data){
               // global ${$name};
                //${$name} = $data;
            }
        }
    }
}