<?php
    session_start();
    define('ROOT', dirname(__FILE__));    
    define("SRCPATH", str_replace($_SERVER["DOCUMENT_ROOT"], "", __DIR__));
    require_once(ROOT .'/components/Router.php');
    require_once(ROOT .'/components/Db.php');

    $router = new Router();
    $router->run();
?>