<?php
error_reporting(E_ALL);
require __DIR__ . 'vendor/autoload.php';
$req=$_SERVER['REQUEST_URI'];

/*Массив роутов роутов*/
$routs=[
    '^$'=>['controller'=>'main','action'=>'index'],
    '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$'
];


