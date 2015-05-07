<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: JLI
 * Date: 15-5-7
 * Time: 上午9:19
 */

if (!function_exists('SendSecurityCode')) {
    define(SECURITYCODE_RESP_ADDR, 'http://api.sms.mob.com/sms/verify');
    define(SECURITYCODE_APP_KEY, '741a6c5a7c10');

    function SendSecurityCode($phone, $code, $zone, $timeout = 10)
    {
        $param = array('appkey' => SECURITYCODE_APP_KEY,
            'phone' => $phone,
            'zone' => $zone,
            'code' => $code);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, SECURITYCODE_RESP_ADDR);
        // 以返回的形式接收信息
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 设置为POST方式
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
        // 不验证https证书
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
            'Accept: application/json',
        ));
        curl_setopt($ch, CURLOPT_PROXY, '137.16.0.23:83');
        //curl_setopt($ch, CURLOPT_PROXYPORT, '83');
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'jli29:ttTT1234');

        // 发送数据
        $response = curl_exec($ch);
        $err_msg = curl_error($ch);
        // 不要忘记释放资源
        curl_close($ch);
        return $response;
    }
}


