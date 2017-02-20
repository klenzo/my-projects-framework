<?php
    session_start();

    require_once '../app/configs/global.php';

    // $_DB = new App\Classes\DataBase();

    $slugPage = \App\Classes\Pages::getSlug();
    $page = 'App\Controllers\\'. ucfirst($slugPage);
    $_PAGE = new $page();

    include_once APP_DIR .'/views/inc/head.php';
    include_once APP_DIR .'/views/'. $_PAGE->getPageFile() .'.php';
    include_once APP_DIR .'/views/inc/footer.php';
