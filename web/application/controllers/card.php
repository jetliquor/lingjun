<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Card extends PrimeController
{
    public function index()
    {
        $this->data['page_name'] = 'card';
        array_push($this->data['csses'], getCss('card.css'));
        $this->layout->view('vcard', $this->data);
    }

    public function apply($phone, $scode, $type)
    {
        session_start();
        if (strtoupper($scode) == strtoupper($_SESSION["SecurityCode"])) {
            // OK for apply

            // feedback nothing
        }
    }
}
