<?php

namespace App\Index;

use App\Base\BaseController;
use App\Utils\Uuid;

use Service\TestService;

class IndexController extends  BaseController {
    /**
     * index api
     */
    static public function  index($ctx,$form){ 
        $t=new TestService();
        return self::success($t->test());
    }
}