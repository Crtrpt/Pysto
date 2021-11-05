<?php
namespace Core;

class Log {
    static $logFile;
    static function Init(){
        Log::$logFile=fopen("../log/access.log", "a+");
    }
    static function debug($log){
        fwrite(Log::$logFile, Log::getLogStr().Log::serialization($log)."\r\n");
    }
    static function info($log){
        fwrite(Log::$logFile, Log::getLogStr().Log::serialization($log)."\r\n");
    }
    static function warning($log){
        fwrite(Log::$logFile, Log::getLogStr().Log::serialization($log)."\r\n");
    }
    static function error($log){
        fwrite(Log::$logFile, Log::getLogStr().Log::serialization($log)."\r\n");
    }
    static function getLogStr(){
        return "[".date("y-m-d h:i:s",time())."] ";
    }
    static function serialization($data){
        if(is_string($data)){
            return $data;
        }else{
            return  json_encode($data);
        }
    }
}
