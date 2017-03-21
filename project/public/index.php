<?php
    session_start();

    require_once '../app/configs/global.php';

    $slugPage = \App\Classes\Pages::getSlug();
    $page = 'App\Controllers\\'. ucfirst($slugPage);

    $_PAGE = new $page();

ob_start();
    includeFile('head');
    include_once VIEWS_DIR .'/'. getPage('file') .'.php';
    includeFile('footer');
$html = ob_get_clean();

if ($_PAGE::MINIFY_HTML) {
    echo sanitize_output($html);
} else {
    echo $html;
}
