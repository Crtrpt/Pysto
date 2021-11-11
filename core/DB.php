<?php
namespace Core;

class DB {
    static  $ctx;

    static function Init(){ 
        self::connect();
    }
    static function connect(){
       self::$ctx=new \PDO( Config::get("db.dsn"), Config::get("db.user"), Config::get("db.password"));
    }
    static function beginTransaction(){
        //开始事务
        self::$ctx->beginTransaction();
    }
    static function commit(){
        self::$ctx->commit();
        //提交
    }
    static function rollBack(){
        self::$ctx->rollBack();
        //回滚
    }
    //执行select 查询
    static function select($sql,$result=""){
        if(!self::$ctx){
            self::connect();
        }
        $sth =self::$ctx->prepare($sql, array(
            \PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY
        ));     
        $sth->execute();
        if($result==""){
            $red = $sth->fetchAll(\PDO::FETCH_COLUMN,0);
        }else{
            $red = $sth->fetchAll(\PDO::FETCH_CLASS,$result);
        }
       
        return $red;
    }
}
