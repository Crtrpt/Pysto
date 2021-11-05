<?php
namespace Core;
use Core\Ctx;
use Core\Component;
class Log  implements Component{
    static $logFile;
    static $ctx;
    static function Init($ctx){
        Log::$ctx=$ctx;
        $postfix=date("y-m-d",time());

        Log::$logFile=fopen(Config::get("app.log_path","../log/app.log".$postfix), "a+");
    }
    static function Shutdown($ctx){
        fclose(Log::$logFile);
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

        return  "[".Log::$ctx->get("ip")."] "
                ."[".Log::$ctx->get("server")["SERVER_NAME"]."] "
                ."[".date("y-m-d h:i:s",time())."] "
                ."[".Log::$ctx->get("tid")."] "
                ."[".Log::$ctx->get("REQUEST_URI")."] "
                ."[".Log::$ctx->get("namespace")."] "
                ;
    }
    static function serialization($data){
        if(is_string($data)){
            return $data;
        }else{
            return  json_encode($data);
        }
    }
}
