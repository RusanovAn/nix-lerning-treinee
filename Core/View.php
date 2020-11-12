<?php

namespace Core;

class View
{

    public $view;
    public $layout;

    public function __construct($view,$layout)
    {
        $this->view=$view;
        $layout=='' ? $this->layout=LAYOUT : $this->layout=$layout;
    }

    public function render($data=null){
        if (isset($data)){
            extract($data);
        }
        ob_start();
        include ROOT.'/App/views/'.$this->view.'.php';
        $content=ob_get_clean();
        include ROOT.'/App/views/Layout/'.$this->layout.'.php';
    }
}