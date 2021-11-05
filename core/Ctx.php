<?php
namespace Core;

class Ctx {
    var $context=[];
    
    static function Init(){
    
    }
    
    function set($k,$v){
        $this->context[$k]=$v;
    }

    function get($k){
        return $this->context[$k];
    }
    
}
