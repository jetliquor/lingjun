<?php
/**
 * Created by PhpStorm.
 * User: JLI
 * Date: 15-5-13
 * Time: 下午12:04
 */

//namespace jli\helper\path;

if (!function_exists('getImg')) {
    function getImg($img_name)
    {
        return '/51huanxin/image/' . $img_name;
    }
}

if (!function_exists('getCss')) {
    function getCss($css_name)
    {
        return '/51huanxin/css/' . $css_name;
    }
}

if (!function_exists('getJs')) {
    function getJs($js_name)
    {
        return '/51huanxin/js/' . $js_name;
    }
}
