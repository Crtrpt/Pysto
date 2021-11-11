<?php
namespace Mapper;

class Device extends Base {
   var $id;
   /**
    * 设备名称
    */
   var $name;
   /**
    * 产品型号
    */
   var $model_id;
   /**
    * 产品类型
    */
   var $product_id;
   /**
    * 接入网关
    */
   var $gateway_id;
    /**
     * 设备位置
     */
    var $location;
}