<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Card extends PrimeController
{
    public function index()
    {
        $this->data['page_name'] = 'card';
        array_push($this->data['csses'], '/css/card.css');
        $this->layout->view('vcard', $this->data);
    }
}
