<?php

    define("ROOTPATH", str_replace($_SERVER["DOCUMENT_ROOT"], "", __DIR__));
     
    include("./components/head.php");
    include("./components/header.php");
    include("./views/home.php");
    include("./components/footer.php");
?>