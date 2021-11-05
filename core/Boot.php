<?php
namespace Core;
use Core\Ctx;
use Core\Config;
use Core\Route;

class Boot {
    static function Run(){
        $ctx=new Ctx();
        Boot::Init();
        // var_dump(Config::get("app.name"));
        // var_dump($_SERVER["REQUEST_URI"]);
        Route::Boot($_SERVER["REQUEST_URI"],$ctx);
        return  $ctx->get("response");
    }
    static function Init(){
        Config::Init();
        Route::Init();
    }
}
