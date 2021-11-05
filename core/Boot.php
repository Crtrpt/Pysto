<?php
namespace Core;

use Core\Config;

class Boot {
    static function Run(){
        Boot::Init();
        var_dump(Config::get("app.name"));
    }
    static function Init(){
        Config::Init();
    }
}
