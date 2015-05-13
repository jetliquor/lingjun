<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Faq extends PrimeController
{
    public function index()
    {
        $this->data['page_name'] = 'faq';
        array_push($this->data['csses'], getCss('faq.css'));
        $this->layout->view('vfaq', $this->data);
    }
}
