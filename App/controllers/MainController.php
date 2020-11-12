<?php

namespace App\controllers;
use App\models\MainModel;
use Core\Controller;

class MainController extends Controller {


    public function viewAction(){
        $modelObj = new MainModel();
        $data=$modelObj->viewAction();
        $this->setData(compact('data'));
    }
}