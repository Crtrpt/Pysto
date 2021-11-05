<?php
namespace Core;

class Route {
    static function Init(){

    }
    static function Boot(String $requestPath,$ctx){
        //路由解析
        $seg=explode("/",$requestPath);
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
       
        $instance=new $namespace();

        $action=$seg[3];



       
        $ctx->set("response", $instance->$action());
    }
}
