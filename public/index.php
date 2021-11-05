<?php

$start_time=time();

try{
    require __DIR__ . '/../vendor/autoload.php';
    //开始执行  
    \Core\Boot::Run();
}catch(Exception $e){
    return json_encode([
        "code"=>-1,"msg"=>"系统正在维护请稍等"
    ]);
}

$end_time=time();
//如果请求大于三秒就打印报告

if(($end_time-$start_time)>3*1000){
    var_dump("运行时间大于3秒");
}