<?php

namespace App\Test;

use App\Base\BaseController;

use Core\Event;
use Core\Log;

class TestController extends  BaseController {
    
    static public function  index(){
        return self::success("test api");
    }

    static public function  event(){
        Event::on("test",function($payload){
            var_dump($payload."11111");
        });

        Event::fire("test","干什么?");

        return self::success("test api");
    }
    static public function  log(){
        Log::info("11");
        return self::success("test api");
    }

}