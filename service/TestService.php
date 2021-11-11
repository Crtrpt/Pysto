<?php
namespace Service;
use Service\BaseService;
use Core\DB;

class TestService extends BaseService {
    function test(){
        $res=DB::select("select version() as v");
        return $res[0];
    }
}