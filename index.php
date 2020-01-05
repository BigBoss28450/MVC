<?php

    session_start();

    require_once('System/Config/Config.php');
    require_once('System/Core/Autoload.php');
    require_once('Database/db.php');
    $router = new Router();

    $controller = $router->getController();
    $controller .= '_Controller';
    $method = $router->getMethod();
    $param = $router->getParam();

    require_once(PATH_CONTROLLERS . '/' . explode('_', $controller)[0] . '.php');

    $controlador = new $controller;
    $controlador->$method($param);

// require_once("Database/db.php");
// require_once("Controllers/Home.php");
// $show = new home_controller();
// $show->index();
?>