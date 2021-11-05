<?php

namespace App\Utils;


class UUid 
{
    static function tid(){
        return base_convert(date("ymdhis",time()).rand(),10,31);
    }
}


