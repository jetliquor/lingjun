<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Misc extends PrimeController {

    public function agreement()
    {
        $this->data['page_name'] = '';
        array_push($this->data['csses'], getCss('agreement.css'));
        $this->layout->view('vagreement', $this->data);
    }

    public function news()
    {
        $this->data['page_name'] = '';
        array_push($this->data['csses'], getCss('news.css'));
        $this->layout->view('vnews', $this->data);
    }
}
