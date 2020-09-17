<?php

namespace app\controllers;

use app\models\AppModel;
use ishop\base\Controller as parentAlias;

class AppController extends parentAlias
{
    public $test;
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }

    public function myMethod($test)
    {

    }

    /**
     * @param $method
     */
    public function notMyMethod($method)
    {

    }
}