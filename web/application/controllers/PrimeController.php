<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

abstract class PrimeController extends CI_Controller
{
    protected $data = array();

    public function PrimeController()
    {
        parent::__construct();
        $this->load->library('layout', array('layout' => 'prime'));

        $this->data['jses'] = array(
            getJs('jquery-1.11.2.js'),
            getJs('jquery-ui.js'),
            getJs('jquery.timepicker.js'),
            getJs('bootstrap.js'),
            getJs('ljcommon.js'),
            getJs('ljmain.js'));

        $this->data['csses'] = array(
            getCss('bootstrap.css'),
            getCss('bootstrap-theme.css'),
            //getCss(''https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'),
            //getCss(''https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css'),
            getCss('jquery-ui.css'),
            getCss('jquery.timepicker.css'),
            getCss('common.css'));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */