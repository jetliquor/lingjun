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

    public function SendSecurityCode($phone, $vcode)
    {
        session_start();
        if (strtoupper($vcode) == strtoupper($_SESSION["VerifyCode"])) {
            $this->load->helper('SecurityCode');
            $num = rand(10, 9100);
            $vcode = sprintf("%04d", $num);
            $_SESSION["SecurityCode"] = $vcode;
            send_security_code($phone, array('code' => $vcode, 'expires' => '5'));
        } else {
            echo "验证码错误！";
        }
    }
}