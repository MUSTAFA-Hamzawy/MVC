<?php


namespace MVC\controllers;
use MVC\models\home as homeModel;

class home extends controller
{
    private $modelObject;

    public function __construct(){
        $this->modelObject = new homeModel();
    }

}