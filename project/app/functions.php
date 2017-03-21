<?php

function sanitize_output($buffer)
{
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

function getPage($value = false, $echo = false)
{
    $_PAGE = $GLOBALS['_PAGE'];
    
    if ($value) {
        if (! is_array($value)) {
            $value = $_PAGE->getPageInfo($value);
            if ($echo && $value) {
                echo $value;
            }

            return $value;
        } else {
            $result = array();
            foreach ($value as $key => $v) {
                $result[$v] = $_PAGE->getPageInfo($v);

                if ($echo && $result[$v]) {
                    echo $result[$v];
                }
            }
        }

        return $result;
    } else {
    }
}

function includeFile($file)
{
    $file = INC_DIR .'/'. $file . '.php';

    if (file_exists($file)) {
        include_once $file;
        return true;
    }
    return false;
}

function getHeader()
{
    $_PAGE = $GLOBALS['_PAGE'];

    if ($_PAGE->getPageShowHeader()) {
        return includeFile($_PAGE->getFileHeader());
    }
    return false;
}

function getCSS($echo = true)
{
    $_PAGE = $GLOBALS['_PAGE'];

    $css = $_PAGE->getPageCss();
    if ($echo) {
        echo $css;
        return true;
    } else {
        return $css;
    }
}

function getFooter()
{
    $_PAGE = $GLOBALS['_PAGE'];

    if ($_PAGE->getPageShowFooter()) {
        return includeFile($_PAGE->getFileFooter());
    }
    return false;
}

function getJS($echo = true)
{
    $_PAGE = $GLOBALS['_PAGE'];

    $js = $_PAGE->getPageJs();
    if ($echo) {
        echo $js;
        return true;
    } else {
        return $js;
    }
}
