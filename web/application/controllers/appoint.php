<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Appoint extends PrimeController
{
    public function Appoint()
    {
        parent::__construct();
        $this->load->model('mproduct');
        $this->data['page_name'] = 'appoint';
    }

    public function index()
    {
        array_push($this->data['csses'], '/css/appoint.css');
        $this->data['products'] = $this->mproduct->getAll();
        $this->layout->view('vappoint', $this->data);
    }

    public function detail($city, $id)
    {
        array_push($this->data['csses'], '/css/detail.css');
        $this->layout->view('vdetail', $this->data);
    }
}
