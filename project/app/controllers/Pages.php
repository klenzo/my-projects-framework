<?php
namespace App\Controllers;

/**
*
*/
class Pages
{
    const MINIFY_HTML = true;

    protected $page_name;
    protected $page_file;
    protected $page_slug;
    protected $page_title;
    protected $page_charset = 'utf-8';
    protected $page_description = '';
    protected $page_keywords = '';

    protected $page_showHeader = true;
    protected $page_header = 'header';
    protected $page_showFooter = true;
    protected $page_footer = 'footer_content';

    protected $page_css = array();
    protected $page_js = array();

    public function __construct()
    {
        $this->page_file = PAGE_ROOT;
        $this->page_slug = PAGE_ROOT;

        $this->init();

        $this->setPageCss([
            'font-awesome' => '/assets/lib/font-awesome/css/font-awesome.min.css',
            '/assets/css/style.css'
        ]);

        $this->setPageJs([
            'jQuery' => '/assets/lib/jquery.js',
            '/assets/js/app.js'
        ]);
    }

    public function getPageInfo($value)
    {
        $value = strtolower($value);
        if (is_string($value)) {
            $value = 'page_'.$value;
            return $this->$value;
        }
        
        return false;
    }


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

    /**
     * Gets the value of page_css.
     *
     * @return mixed
     */
    public function getPageCss()
    {
        $pageCss = '';
        foreach ($this->page_css as $key => $value) {
            if (is_int($key)) {
                $id = '';
            } else {
                $id=' id="'. $key .'"';
            }
            $pageCss .= '<link rel="stylesheet" type="text/css"'. $id .' href="'. $value .'">';
        }

        return $pageCss;
    }

    /**
     * Sets the value of page_css.
     *
     * @param mixed $page_css the page css
     *
     * @return self
     */
    protected function setPageCss($page_css, $append = true)
    {
        if ($append === true) {
            $this->page_css = array_merge($this->page_css, $page_css);
        } else {
            $this->page_css = $page_css;
        }

        return $this;
    }

    /**
     * Gets the value of page_js.
     *
     * @return mixed
     */
    public function getPageJs()
    {
        $pageJs = '';
        foreach ($this->page_js as $key => $value) {
            if (is_int($key)) {
                $id = '';
            } else {
                $id=' id="'. $key .'"';
            }
            $pageJs .= '<script type="text/javascript"'. $id .' src="'. $value .'"></script>';
        }

        return $pageJs;
    }

    /**
     * Sets the value of page_js.
     *
     * @param mixed $page_js the page js
     *
     * @return self
     */
    protected function setPageJs($page_js, $append = true)
    {
        if ($append === true) {
            $this->page_js = array_merge($this->page_js, $page_js);
        } else {
            $this->page_js = $page_js;
        }

        return $this;
    }

    /**
     * Gets the value of page_slug.
     *
     * @return mixed
     */
    public function getPageSlug()
    {
        return $this->page_slug;
    }

    /**
     * Sets the value of page_slug.
     *
     * @param mixed $page_slug the page slug
     *
     * @return self
     */
    protected function setPageSlug($page_slug)
    {
        $this->page_slug = $page_slug;

        return $this;
    }

    /**
     * Gets the value of page_header.
     *
     * @return mixed
     */
    public function getFileHeader()
    {
        return $this->page_header;
    }

    /**
     * Sets the value of page_header.
     *
     * @param mixed $page_header the file header
     *
     * @return self
     */
    protected function setFileHeader($page_header)
    {
        $this->page_header = $page_header;

        return $this;
    }

    /**
     * Gets the value of page_footer.
     *
     * @return mixed
     */
    public function getFileFooter()
    {
        return $this->page_footer;
    }

    /**
     * Sets the value of page_footer.
     *
     * @param mixed $page_footer the file footer
     *
     * @return self
     */
    protected function setFileFooter($page_footer)
    {
        $this->page_footer = $page_footer;

        return $this;
    }
}
