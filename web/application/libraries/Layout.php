<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: lv
 * Date: 2015/5/8
 * Time: 22:24
 */
class Layout
{
    var $obj;
    var $layout;

    function Layout(array $params)
    {
        $this->obj =& get_instance();
        if (isset($params['layout'])) {
            $this->layout = 'layouts/' . $params['layout'];
        }
    }

    function setLayout($layout)
    {
        $this->layout = $layout;
    }

    function view($view, $data = null, $return = false)
    {
        if ($data === null) {
            $data = array();
        }
        $data['content_for_layout'] = $this->obj->load->view($view, $data, true);

        if ($return) {
            $output = $this->obj->load->view($this->layout, $data, true);
            return $output;
        } else {
            $this->obj->load->view($this->layout, $data, false);
        }
    }
}