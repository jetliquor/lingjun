<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Home extends PrimeController
{
    public function index()
    {
        $this->data['page_name'] = 'home';
        array_push($this->data['csses'], '/css/home.css');
        $this->layout->view('vhome', $this->data);
    }
}
