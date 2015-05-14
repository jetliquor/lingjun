<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Home extends PrimeController
{
    public function Home()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['page_name'] = 'home';
        array_push($this->data['csses'], getCss('home.css'));
        $this->layout->view('vhome', $this->data);
    }
}
