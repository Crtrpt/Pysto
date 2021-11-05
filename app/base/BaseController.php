<?php

namespace App\Base;

class BaseController {
    
    public static function  success($data){
        return [
            "code"=>0,
            "msg"=>"success",
            "data"=>$data
        ];
    }

    public static function error($msg){
        return [
            "code"=>1,
            "msg"=>"success",
            "data"=>$data
        ];
    }
}
