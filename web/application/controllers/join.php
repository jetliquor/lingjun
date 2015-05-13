<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Join extends PrimeController
{
    public function index()
    {
        $this->data['page_name'] = 'join';
        array_push($this->data['csses'], getCss('join.css'));
        $this->layout->view('vjoin', $this->data);
    }
}
