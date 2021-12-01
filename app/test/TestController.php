<?php

namespace App\Test;

use App\Base\BaseController;

use Core\Event;
use Core\Log;

class TestController extends  BaseController {
    
    public function  index(){
        return self::success("test api11");
    }

    public function  indee11(){
        return self::success("test api222");
    }

    static public function  event(){
        Event::on("test",function($payload){
            var_dump($payload."11111");
        });

        Event::fire("test","干什么?");

        return self::success("test api");
    }
    public function  log(){
        Log::info("11");
        return self::success("test api");
    }

}