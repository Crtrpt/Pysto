<?php

$globConfig=[];
$configs=scandir("./config/env");

foreach($configs as $k=>$v){
    if($v!="."  and $v!=".."){
        $key=explode(".",$v)[0];
        // echo $v;
        $keyConfig=include ("./config/env/".$v);
        foreach($keyConfig as $sk=>$sv){
            echo $key.".".$sk." : ".$sv."\r\n";
            $globConfig[$key.".".$sk]=$sv;
        }
    }
}

file_put_contents("./core/cache/config.json",json_encode($globConfig));