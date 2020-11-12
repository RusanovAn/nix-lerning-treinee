<?php
namespace App\controllers;
use App\models\PostsModel;
use Core\Controller;
class PostsController extends Controller{

    public function viewAction(){
        $model = new PostsModel();
        $data=$model->viewAction();
        $this->setData(compact('data'));
    }
}