<?php
namespace Core;

/**
 * 单个请求内的事件
 */
class Event {

     static $eventBus=[];
    /**
     * 订阅
     */
    static function on($event,$callback){
        //TODO 
        if(isset(Event::$eventBus[$event])){

        }else{
            Event::$eventBus[$event]=[];
        }
        array_push(Event::$eventBus[$event],$callback);
    }
    /**
     * 取消订阅
     */
    static function off($event){
        Event::$eventBus[$event]=[];
    }
    /**
     * 触发
     */
    static function fire($event,$payload){
        $eventCallbacks=Event::$eventBus[$event];
        foreach($eventCallbacks as $ev){
            $ev($payload);
        }
    }
}
