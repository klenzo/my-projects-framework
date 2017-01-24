<?php
namespace App\Controllers;

/**
* 
*/
class Pages
{
    protected $page_name;
    protected $page_file;
    protected $page_title;
    protected $page_charset = 'utf-8';
    protected $page_description = '';
    protected $page_keywords = '';

    protected $page_showHeader = true;
    protected $page_showFooter = true;

    /**
     * Gets the value of page_name.
     *
     * @return mixed
     */
    public function getPageName()
    {
        return $this->page_name;
    }

    /**
     * Sets the value of page_name.
     *
     * @param mixed $page_name the page name
     *
     * @return self
     */
    protected function setPageName($page_name)
    {
        $this->page_name = $page_name;

        return $this;
    }

    /**
     * Gets the value of page_file.
     *
     * @return mixed
     */
    public function getPageFile()
    {
        return $this->page_file;
    }

    /**
     * Sets the value of page_file.
     *
     * @param mixed $page_file the page file
     *
     * @return self
     */
    protected function setPageFile($page_file)
    {
        $this->page_file = $page_file;

        return $this;
    }

    /**
     * Gets the value of page_title.
     *
     * @return mixed
     */
    public function getPageTitle()
    {
        return $this->page_title;
    }

    /**
     * Sets the value of page_title.
     *
     * @param mixed $page_title the page title
     *
     * @return self
     */
    protected function setPageTitle($page_title)
    {
        $this->page_title = $page_title;

        return $this;
    }

    /**
     * Gets the value of page_description.
     *
     * @return mixed
     */
    public function getPageDescription()
    {
        return $this->page_description;
    }

    /**
     * Sets the value of page_description.
     *
     * @param mixed $page_description the page description
     *
     * @return self
     */
    protected function setPageDescription($page_description)
    {
        $this->page_description = $page_description;

        return $this;
    }

    /**
     * Gets the value of page_keywords.
     *
     * @return mixed
     */
    public function getPageKeywords()
    {
        return $this->page_keywords;
    }

    /**
     * Sets the value of page_keywords.
     *
     * @param mixed $page_keywords the page keywords
     *
     * @return self
     */
    protected function setPageKeywords($page_keywords)
    {
        $this->page_keywords = $page_keywords;

        return $this;
    }

    /**
     * Gets the value of page_showHeader.
     *
     * @return mixed
     */
    public function getPageShowHeader()
    {
        return $this->page_showHeader;
    }

    /**
     * Sets the value of page_showHeader.
     *
     * @param mixed $page_showHeader the page show header
     *
     * @return self
     */
    protected function setPageShowHeader($page_showHeader)
    {
        $this->page_showHeader = $page_showHeader;

        return $this;
    }

    /**
     * Gets the value of page_showFooter.
     *
     * @return mixed
     */
    public function getPageShowFooter()
    {
        return $this->page_showFooter;
    }

    /**
     * Sets the value of page_showFooter.
     *
     * @param mixed $page_showFooter the page show footer
     *
     * @return self
     */
    protected function setPageShowFooter($page_showFooter)
    {
        $this->page_showFooter = $page_showFooter;

        return $this;
    }

    /**
     * Gets the value of page_charset.
     *
     * @return mixed
     */
    public function getPageCharset()
    {
        return $this->page_charset;
    }

    /**
     * Sets the value of page_charset.
     *
     * @param mixed $page_charset the page charset
     *
     * @return self
     */
    protected function setPageCharset($page_charset)
    {
        $this->page_charset = $page_charset;

        return $this;
    }
}