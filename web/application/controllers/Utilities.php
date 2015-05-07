<?php

/**
 * Created by PhpStorm.
 * User: JLI29
 * Date: 15-5-7
 * Time: 上午9:27
 */
class Utilities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function CreateVerifyCode()
    {
        $this->load->helper('VerifyCode');
        $checkCode = GenVerifyCode();

        session_start();
        $_SESSION["VerifyCode"] = $checkCode['code'];
        header("Content-type:image/png");
        imagepng($checkCode['image']); //输出图像到浏览器
        imagedestroy($checkCode['image']); //释放资源
    }

    public function CheckVerifyCode()
    {
        session_start();
        @$postcode = $_GET['code'];
        if ((strtoupper($postcode)) == strtoupper(($_SESSION["VerifyCode"]))) {
            echo '{"verifycode":"Y"}';
        } else {
            echo '{"verifycode":"N"}';
        }
    }

    public function SendSecurityCode($phone, $code, $zone)
    {
        $this->load->helper('SecurityCode');
        return SendSecurityCode($phone, $code, $zone, 10);
    }
}