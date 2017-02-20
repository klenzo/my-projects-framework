<?php
namespace App\Controllers;

/**
*
*/
class E404 extends \App\Controllers\Pages
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $this->setPageName(__CLASS__);
        $this->setPageFile('errors/404');
        $this->setPageTitle('Erreur 404 ! Page Introuvable');
    }
}
