<?php
error_reporting(E_ALL);
require '../configs/config.php';
require ROOT. '/vendor/autoload.php';
use Core\Routing;
Routing::start();
