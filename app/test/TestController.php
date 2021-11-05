<?php

namespace App\Test;

use App\Base\BaseController;

class TestController extends  BaseController {
    
    static public function  index(){
        return self::success("test api");
    }
}