<?php
    define('ROOT', dirname(__FILE__));    
    define("SRCPATH", str_replace($_SERVER["DOCUMENT_ROOT"], "", __DIR__));
    require_once(ROOT .'/components/Router.php');

    $router = new Router();
    $router->run();
?>