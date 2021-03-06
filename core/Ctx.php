<?php
namespace Core;

class Ctx {
    var $context=[];
    
    static function tid(){
        return base_convert(date("ymdhis",time()).rand(),10,31);
    }

    function __construct(){
        $this->context["ip"]=$_SERVER["REMOTE_ADDR"] ;
        $this->context["server"]=$_SERVER;
        $this->context["tid"]=Ctx::tid();
        $this->context["REQUEST_URI"]=$_SERVER["REQUEST_URI"];
    }

    function set($k,$v){
        $this->context[$k]=$v;
    }

    function get($k){
        return $this->context[$k];
    }

}
