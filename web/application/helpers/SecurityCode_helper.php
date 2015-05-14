<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: JLI
 * Date: 15-5-7
 * Time: 上午9:19
 */

if (!function_exists('SendSecurityCode')) {
    define('SECURITYCODE_RESP_ADDR', 'https://api.sms.mob.com/sms/verify');
    define('SECURITYCODE_APP_KEY', '741a6c5a7c10');

    function send_security_code($phone, $code, $zone, $timeout = 10)
    {
        $param = array('appkey' => '7419c07e0e40',
            'phone' => '18983213533',
            'zone' => '86',
            'code' => '5231');

//
//        $options = array(
//            'http' => array(
//                'method' => 'POST',
//                'header' => "Content-Type: application/x-www-form-urlencoded;charset=UTF-8;Accept: application/json",
//                'content' => $param
//            )
//        );
//        $response = file_get_contents(SECURITYCODE_RESP_ADDR, false, stream_context_create($options));
        //echo "jli: $response";

        $response = postRequest(SECURITYCODE_RESP_ADDR, $param, 10);
        echo $response;
        return $response;
    }

    function postRequest($api, array $params = array(), $timeout = 30)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api);
        // 以返回的形式接收信息
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 设置为POST方式
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        // 不验证https证书
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
            'Accept: application/json',
        ));
        // 发送数据
        $response = curl_exec($ch);
        // 不要忘记释放资源
        curl_close($ch);
        return $response;
    }

}


