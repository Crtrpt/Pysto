<?php
namespace Core;
use Core\Ctx;
use Core\Config;
use Core\Route;

class Boot {
    static function Run(){
        $ctx=new Ctx();
        Boot::Init();
        //路由到相应的文件
        Route::Boot($_SERVER["REQUEST_URI"],$ctx);
        return  $ctx->get("response");
    }
    static function Init(){
        Log::Init();
        Config::Init();
        Route::Init();
    }
}
