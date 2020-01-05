<?php
    spl_autoload_register(function($class){
        if (is_file(CORE_URL . "$class.php")) {
            require(CORE_URL . "$class.php");
        }
    });
?>