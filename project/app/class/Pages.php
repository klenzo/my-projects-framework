<?php
namespace App\Classes;

/**
 *
 */
class Pages
{
    public static function getSlug()
    {
        $pageSlug = PAGE_ROOT;

        if (isset($_GET['page']) && !empty($_GET['page']) && preg_match(REGEX_PAGE, $_GET['page'])) {
            $filePath = CONTROLLERS_DIR . '/'. ucfirst($_GET['page']) .'.php';
            if (file_exists($filePath)) {
                $pageSlug = strtolower($_GET['page']);
            } else {
                $filePath = VIEWS_DIR . '/'. strtolower($_GET['page']) .'.php';
                if( file_exists($filePath) ){
                    $pageSlug = 'GlobalControllers';
                }else{
                    $pageSlug = PAGE_404;
                }
            }
        }
        return $pageSlug;
    }

    public static function getPost($item = false)
    {
        if ($item) {
            if (isset($_POST[$item])) {
                return $_POST[$item];
            } else {
                return array();
            }
        } else {
            return $_POST;
        }
    }

    public static function getGet($item = false)
    {
        if ($item) {
            if (isset($_GET[$item])) {
                return $_GET[$item];
            } else {
                return array();
            }
        } else {
            return $_GET;
        }
    }
}
