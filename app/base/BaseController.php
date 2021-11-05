<?php

namespace App\Base;
use App\Utils\Uuid;

class BaseController {
    
    public static function  success($data){
        return [
            "code"=>0,
            "data"=>$data,
            "tid"=>Uuid::tid()
        ];
    }

    public static function error($msg){
        return [
            "code"=>1,
            "msg"=>"success",
            "tid"=>Uuid::tid()
        ];
    }
}
