<?php

namespace \App\Base\BaseController;

class BaseController {
    
    public static function  success($data){
        return json_encode([
            "code"=>0,
            "msg"=>"success",
            "data"=>$data
        ]);
    }

    public static function error($msg){
        return json_encode([
            "code"=>1,
            "msg"=>"success",
            "data"=>$data
        ]);
    }
}
