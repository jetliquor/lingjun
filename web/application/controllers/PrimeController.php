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
            '//code.jquery.com/ui/1.11.4/jquery-ui.js',
            '/js/bootstrap.js',
            '/js/ljcommon.js',
            '/js/ljmain.js');

        $this->data['csses'] = array(
            '/css/bootstrap.css',
            '/css/bootstrap-theme.css',
            //'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
            //'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
            '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css',
            '/css/common.css');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */