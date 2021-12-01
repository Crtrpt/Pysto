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
        return self::success("");
    }
}