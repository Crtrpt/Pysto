<?php

namespace App\User;

use App\Base\BaseController;


class UserController extends  BaseController {
    
    static public function  index(){
        
        return self::success("");
    }
}