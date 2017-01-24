<?php
namespace App\Classes;

/**
 *
 */
class Pages
{
    static $defaultPage = 'home';

    static public function getSlug()
    {
        $pageSlug = self::$defaultPage;

        if( isset( $_GET['page'] ) && !empty( $_GET['page'] ) && preg_match(REGEX_PAGE, $_GET['page']) ){
            $filePath = CONTROLLERS_DIR . '/'. ucfirst( $_GET['page'] ) .'.php';
            if( file_exists( $filePath )  ){
                $pageSlug = strtolower($_GET['page']);
            }else{
                $pageSlug = 'E404';
            }
        }
        return $pageSlug;
    }
}
