<?php



namespace Core;


class Route {
    static function Init(){

    }
    static function Boot(String $requestPath,$ctx){
        //路由解析
        $seg=explode("/",  explode("?",$requestPath)[0]);
        if(!isset($seg[1] )){
            array_push($seg,"index");
        }else{
            if(empty($seg[1])){
                $seg[1]="index";
            }
        }

        if(!isset($seg[2])){
            array_push($seg,"index");
        }else{
            if(empty($seg[2])){
                $seg[2]="index";
            }
        }

        if(!isset($seg[3])){
            array_push($seg,"index");
        }else{
            if(empty($seg[3])){
                $seg[3]="index";
            }else if(is_numeric($seg[3])){
                $seg[3]="index";
            }
        }

        $namespace="\App\\".ucwords($seg[1])."\\".ucwords($seg[2])."Controller";
        $ctx->set("namespace",$namespace);
        $instance=new $namespace();

        $action=$seg[3];
        $bzStart=microtime(true);
        
        $response=$instance->$action($ctx,$_REQUEST);
        $bzEnd=microtime(true);

        $ctx->set("responseTime", $bzEnd-$bzStart);
        $ctx->set("response",  $response);
       
    }
}
