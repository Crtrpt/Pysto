<?php

namespace App\User;

use App\Base\BaseController;
use App\Utils\Uuid;

class UserController extends  BaseController {
    
    static public function  login($ctx,$form){
        return self::success([
            "token"=>Uuid::token(1)
        ]);
    }
    
    static public function  register($ctx,$form){ 
        return self::success([
            "token"=>Uuid::token(1)
        ]);
    }
}