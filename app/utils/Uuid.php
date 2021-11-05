<?php

namespace App\Utils;


class UUid 
{
    /**
     * 生成跟踪id
     */
    static function tid(){
        return base_convert(date("ymdhis",time()).rand(),10,31);
    }
    /**
     * 生成token 1秒钟生成一次 默认生存周期 7200秒
     */
    static function token($id,$ttl=7200){
        return base_convert(date("sihdmy",time()).rand().$id."00".$ttl,10,31);
    }
}


