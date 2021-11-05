<?php
namespace Core;

class Config {
    
    static $conf = [];

    static function Init(){ 
        Config::$conf=(Array)json_decode( file_get_contents("../core/cache/config.json"));
    }

    static function get(String $configQueryString){
        return Config::$conf[$configQueryString];
    }
}
