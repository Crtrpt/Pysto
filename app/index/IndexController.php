<?php

namespace App\Index;

use App\Base\BaseController;
use App\Utils\Uuid;

use Service\TestService;
use Core\Validation;
class IndexController extends  BaseController {
    /**
     * index api
     */
    static public function  index($ctx,$form){ 
        Validation::test($form,[
            "aaa"=>["required","is_email"]
        ]);
        $t=new TestService();
        return self::success($t->test());
    }
}