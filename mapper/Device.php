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
   var $modelId;
   /**
    * 产品类型
    */
   var $productId;
   /**
    * 接入网关
    */
   var $gatewayId;
    /**
     * 设备位置
     */
    var $location;
    /**
     * 经纬度
     */
    var $lat_long;
}