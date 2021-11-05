<?php

namespace App\User;

use App\Base\BaseController;
use App\Utils\Uuid;

class UserController extends  BaseController {
    
    static public function  index(){ 
        return self::success([
            "token"=>Uuid::token(1)
        ]);
    }
}