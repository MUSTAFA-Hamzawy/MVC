<?php


namespace MVC\controllers;


abstract class controller
{
    protected $controller;
    protected $method;
    protected $parameters;
    protected $viewFile;



    public function setValues($controller, $method, $parameters)
    {
        $this->controller = $controller;
        $this->method = $method;
        $this->parameters = $parameters;
    }

    protected function view(){
        require_once ($this->viewFile);
    }

    public function defaultMethod()
    {
        $this->viewFile = VIEWS . DIRECTORY_SEPARATOR . $this->controller . ".php";
        $this->view();
    }
}