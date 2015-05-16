<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(dirname(__FILE__) . '/PrimeController.php');

class Card extends PrimeController
{
    public function index()
    {
        if ($this->isLogin()) {
            $this->data['page_name'] = 'card';
            array_push($this->data['csses'], getCss('account.css'));
            $this->layout->view('vaccount', $this->data);
        } else {
            $this->data['page_name'] = 'card';
            array_push($this->data['csses'], getCss('card.css'));
            $this->layout->view('vcard', $this->data);
        }
    }

    public function apply($phone, $scode, $type)
    {
        if ($this->isLogin()) {
            echo "退出先！";
        } elseif (strtoupper($scode) == strtoupper($_SESSION["SecurityCode"])) {
            // OK for apply

            // feedback nothing
        } else {
            //
            echo "code error";
        }
    }

    public function login()
    {
        if (!$this->isLogin()) {
            $_SESSION['login'] = true;
        }
        echo "OK";
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->index();
    }

    public function isLogin()
    {
        $a = session_id();
        if (empty($a)) session_start();
        return (isset($_SESSION['login']) && $_SESSION['login']);
    }
}
