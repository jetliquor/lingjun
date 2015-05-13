<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

abstract class PrimeController extends CI_Controller
{
    protected $data = array();
    public function PrimeController()
    {
        parent::__construct();
        $this->load->library('layout', array('layout' => 'prime'));

        $this->data['jses'] = array(
            '/js/jquery-1.11.2.js',
            '/js/jquery-ui.js',
            '/js/jquery.timepicker.js',
            '/js/bootstrap.js',
            '/js/ljcommon.js',
            '/js/ljmain.js');

        $this->data['csses'] = array(
            '/css/bootstrap.css',
            '/css/bootstrap-theme.css',
            //'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
            //'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
            '/css/jquery-ui.css',
            '/css/jquery.timepicker.css',
            '/css/common.css');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */