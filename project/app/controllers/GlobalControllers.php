<?php
namespace App\Controllers;

/**
*
*/
class GlobalControllers extends \App\Controllers\Pages
{
    protected $rooter;
    protected $rooter_file;
    protected $rooter_slug;
    protected $rooter_title;

    public function init()
    {
        $this->setRooter( \App\Classes\Pages::getGet('page') );

        $this->setPageName(__CLASS__);
        $this->setPageFile( $this->getRooterFile() );
        $this->setPageSlug( $this->getRooterSlug() );
        $this->setPageTitle( $this->getRooterTitle() );
    }

    /**
     * Gets the value of rooter.
     *
     * @return mixed
     */
    public function getRooter()
    {
        return $this->rooter;
    }

    /**
     * Sets the value of rooter.
     *
     * @param mixed $rooter the rooter
     * @param mixed $append the append
     *
     * @return self
     */
    protected function setRooter($rooter, $append = true)
    {   
        if( empty( $rooter ) ){ throw new \Exception(ex0001E); }
        if( ! is_array( $rooter ) ){ $rooter = array($rooter); }

        foreach ($rooter as $key => $value) {
            if( is_int( $key ) ){
                $slug = $value;
                $file = $value; 
            }else{
                $slug = $key;
                $file = $value;
            }
            $this->setRooterSlug($slug);
            $this->setRooterFile($file);
        }

        $this->rooter = $rooter;
        return $this;
    }

    /**
     * Gets the value of rooter_file.
     *
     * @return mixed
     */
    public function getRooterFile()
    {
        return $this->rooter_file;
    }

    /**
     * Sets the value of rooter_file.
     *
     * @param mixed $rooter_file the rooter file
     *
     * @return self
     */
    protected function setRooterFile($rooter_file)
    {
        $this->rooter_file = $rooter_file;

        return $this;
    }

    /**
     * Gets the value of rooter_slug.
     *
     * @return mixed
     */
    public function getRooterSlug()
    {
        return $this->rooter_slug;
    }

    /**
     * Sets the value of rooter_slug.
     *
     * @param mixed $rooter_slug the rooter slug
     *
     * @return self
     */
    protected function setRooterSlug($rooter_slug)
    {
        $this->rooter_slug = $rooter_slug;

        return $this;
    }

    /**
     * Gets the value of rooter_title.
     *
     * @return mixed
     */
    public function getRooterTitle()
    {
        return $this->rooter_title;
    }

    /**
     * Sets the value of rooter_title.
     *
     * @param mixed $rooter_title the rooter title
     *
     * @return self
     */
    protected function setRooterTitle($rooter_title)
    {
        $this->rooter_title = $rooter_title;

        return $this;
    }
}
