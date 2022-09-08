<?php

function myautoload($classname) {
    $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname) .'.php';
    require_once('./lib/'.$classname);
}


spl_autoload_register('myautoload');

$url = $_GET['url'];
$parts = explode('/',$url);


$controllerName = '\Controllers\\'.$parts[1].'Controller';


$action = $parts[2];



 array_shift($parts);
 array_shift($parts);
 array_shift($parts);


$controller = new $controllerName();
$controller->$action();
