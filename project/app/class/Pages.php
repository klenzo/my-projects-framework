<?php
namespace App\Classes;

/**
 *
 */
class Pages
{
    public static $defaultPage = 'home';

    public static function getSlug()
    {
        $pageSlug = self::$defaultPage;

        if (isset($_GET['page']) && !empty($_GET['page']) && preg_match(REGEX_PAGE, $_GET['page'])) {
            $filePath = CONTROLLERS_DIR . '/'. ucfirst($_GET['page']) .'.php';
            if (file_exists($filePath)) {
                $pageSlug = strtolower($_GET['page']);
            } else {
                $pageSlug = 'E404';
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
