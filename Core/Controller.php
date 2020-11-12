<?php


namespace Core;


class Controller
{
    public $view;
    public $route;
    public $controller;
    public $model;
    public $layout;
    public $data;
    public function __construct($route)
    {
        $this->route=$route;
        $this->controller=$route['controller'];
        $this->model=$route['model'];
        $this->view=$route['view'];
        $this->layout=LAYOUT;
    }

    public function setData($data){
        $this->data=$data;
    }

    public function getView(){
        $viewObj=new View($this->view,$this->layout);
        $viewObj->render($this->data);
    }





}