<?php
namespace App\Controllers;

/**
*
*/
class Home extends \App\Controllers\Pages
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $this->setPageName(__CLASS__);
        $this->setPageFile('home');
        $this->setPageTitle('Accueil');

        $this->setPageCss([
            'font-awesome' => '/assets/lib/font-awesome/css/font-awesome.min.css',
            '/assets/css/style.css'
        ]);

        $this->setPageJs([
            'jQuery' => '/assets/lib/jquery.js',
            '/assets/js/app.js'
        ]);
    }
}
