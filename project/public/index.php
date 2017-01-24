<?php
    session_start();

    require_once '../app/configs/global.php';

    $_DB = new App\Classes\DataBase();

    $page = 'App\Controllers\\'. ucfirst('home');
    $_PAGE = new $page();
    //var_dump( $_PAGE );


    include_once '../app/views/inc/head.php';
    include_once '../app/views/'. $_PAGE->getPageFile() .'.php';
    include_once '../app/views/inc/footer.php';