<?php
/**
 * Created by PhpStorm.
 * User: JLI
 * Date: 15-5-13
 * Time: 下午12:04
 */

//namespace jli\helper\path;

//const ASSET_PATH = '/51huanxin';
const ASSET_PATH = '';

if (!function_exists('getImg')) {
    function getImg($img_name)
    {
        return ASSET_PATH.'/image/' . $img_name;
    }
}

if (!function_exists('getCss')) {
    function getCss($css_name)
    {
        return ASSET_PATH.'/css/' . $css_name;
    }
}

if (!function_exists('getJs')) {
    function getJs($js_name)
    {
        return ASSET_PATH.'/js/' . $js_name;
    }
}
