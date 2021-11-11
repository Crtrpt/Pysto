<?php
namespace Mapper;

class Base {
   /**
    * 创建时间
    */
   var $create_at;
   /**
    * 记录属于哪个一个用户
    */
   var $create_user;
   var $delete_at;
   var $delete_user;
   var $tenant_id;
}