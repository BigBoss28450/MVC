<?php
    define('URI', $_SERVER['REQUEST_URI']);
    define('CORE_URL', 'System/Core/');
    define('PATH_VIEWS', 'MVC/App/Views');
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    // define('CONTROLLERS_URL', 'Controllers');
    define('BASE_URL', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'].''.str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']));
    define('PATH_CONTROLLERS', 'App/Controllers');
?>