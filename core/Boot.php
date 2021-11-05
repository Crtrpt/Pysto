<?php
namespace Core;
use Core\Ctx;
use Core\Config;
use Core\Route;

class Boot {
    static function Run(){
        $ctx=new Ctx();
        Boot::Init( $ctx);
        //路由到相应的文件
        Route::Boot($_SERVER["REQUEST_URI"],$ctx);


        Boot::ShutDown($ctx);
        return  $ctx->get("response");
    }
    static function Init($ctx){
        Log::Init($ctx);
        Config::Init();
        Route::Init();
    }

    static function ShutDown($ctx){
        Log::ShutDown($ctx);
    }
}
