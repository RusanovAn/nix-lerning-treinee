<?php


namespace Core;


class Routing
{
    public $rout=[];

public static function start(){
    /*Разбиваем урл*/
    $url_array=parse_url($_SERVER['REQUEST_URI']);
    $temp=explode('/',trim($url_array["path"],"/"));
    if (empty($temp[0])){
        $rout["controller"]='MainController';
        $rout["model"]='MainModel';
        $rout["action"]='viewAction';
        $rout["view"]='Main';
    } else {
        $rout["controller"] = ucfirst(strtolower($temp[0])).'Controller';
        $rout["model"]=ucfirst(strtolower($temp[0])).'Model';
        $rout["view"]=strtolower($temp[0]);
        require ROOT . '/configs/routs.php';// подключаем массив с названиями контроллеров, после которых идут алиасы
        if (in_array(strtolower($temp[0]), $aliases)) {
            $rout["alias"] = isset($temp[1]) ? $temp[1].'Alias' : '';
            $rout["action"] = 'viewAction';
        } else {
            $rout["action"] = isset($temp[1]) ? $temp[1].'Action' : 'viewAction';
        }
    }
    $action = $rout["action"];

    /*Создание объекта App\Сontroller и вызов метода Action этого объекта*/

    if (file_exists(ROOT.'/App/controllers/'.$rout["controller"].'.php')) {
        $controller='App\controllers\\'.$rout["controller"];
        if (class_exists($controller)) {
            $controllerObj = new $controller($rout);
            if (method_exists($controllerObj, $action)) {
                $controllerObj->$action();
                $controllerObj->getView();
            } else {
                echo 'Метод '.$rout["action"].' Контроллера '.$rout["controller"].' не найден';
            }
        } else {
            echo 'Контроллер '.$rout["controller"].' не найден';
        }
    }else {
        echo 'Файл с классом '.$rout["controller"].' не найден';
    }
}
}