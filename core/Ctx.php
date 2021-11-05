<?php
namespace Core;

class Ctx {
    var $context=[];
    
    function __construct(){
        $this->context["ip"]=$_SERVER["REMOTE_ADDR"];
    }
    
    function set($k,$v){
        $this->context[$k]=$v;
    }

    function get($k){
        return $this->context[$k];
    }

}
