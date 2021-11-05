<?php

namespace App\Test;

use App\Base\BaseController;

use Core\Event;

class TestController extends  BaseController {
    
    static public function  index(){
        Event::on("test",function($payload){
           
        });

        Event::fire("test","干什么?");

        
        Event::off("test");

        Event::fire("test","干什么222222222111111111111");

        return self::success("test api");
    }

    static public function  event(){
        Event::on("test",function($payload){
            var_dump($payload."11111");
        });

        Event::fire("test","干什么?");

        return self::success("test api");
    }
}