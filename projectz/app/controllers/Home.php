<?php
namespace App\Controllers;

/**
*
*/
class Home extends \App\Controllers\Pages
{
    public function init()
    {
        $this->setPageName(__CLASS__);
        $this->setPageFile('home');
        $this->setPageTitle('Accueil');
    }
}
