<?php
namespace Core;

class Config {
    
    static $conf = [];

    static function Init(){ 
        Config::$conf=(Array)json_decode( file_get_contents("../core/cache/config.json"));
    }

    static function get(String $configQueryString,$default){
        if(isset(Config::$conf[$configQueryString])){
            return Config::$conf[$configQueryString];
        }else{
            return $default;
        }
       
    }
}
