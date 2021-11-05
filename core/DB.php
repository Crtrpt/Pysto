<?php
namespace Core;

class DB {
    static function select($sql){
        $start_time=time();
        var_dump("执行sql"+$sql);
        $end_time=time();
    }
}
