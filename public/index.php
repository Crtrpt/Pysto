<?php
header("Content-type:application/json");

// set_exception_handler(function($e){  
//     echo json_encode([
//         "code"=>-1,
//         "msg"=>"系统正在维护请稍等",
//     ]);
// });

$start_time=time();

require __DIR__ . '/../vendor/autoload.php';
//开始执行  
$res= \Core\Boot::Run();

if(is_string($res)){
    echo $res;
}else{
    echo json_encode($res);
}

$end_time=time();
//如果请求大于三秒就打印报告

if(($end_time-$start_time)>3*1000){
    var_dump("运行时间大于3秒");
}