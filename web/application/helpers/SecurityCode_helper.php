<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: JLI
 * Date: 15-5-7
 * Time: 上午9:19
 */

// for mob.com
//const RESP_ADDR = 'https://api.sms.mob.com/sms/verify';
//const APP_KEY = '7419c07e0e40';

// for yuntongxun.com
include_once("CCPRestSmsSDK.php");
//主帐号,对应开官网发者主账号下的 ACCOUNT SID
const ACCOUNT_SID = '8a48b5514d32a2a8014d52ba37a418cd';

//主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
const ACCOUNT_TOKEN = '59bc88cc255a44aebea3f27eb2a86e64';

//应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
//在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
//$appId='8a48b5514d32a2a8014d52bb748318cf';//product
const APP_ID = 'aaf98f894d328b13014d52bab28c190f';//demo

//请求地址
//沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
//生产环境（用户应用上线使用）：app.cloopen.com
const SERVER_IP = 'sandboxapp.cloopen.com';


//请求端口，生产环境和沙盒环境一致
const SERVER_PORT = '8883';

//REST版本号，在官网文档REST介绍中获得。
const SOFT_VERSION = '2013-12-26';

if (!function_exists('SendSecurityCode')) {

    function send_security_code($phone, array $params)
    {
        // $response = sendByMob($phone, $params, 10);
        $response = sendByYuntongxun($phone, $params, "1");
        echo $response;
        return $response;
    }

    /**
     * 发送模板短信
     * @param to 手机号码集合,用英文逗号分开
     * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
     * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
     */
    function sendByYuntongxun($phone, $params, $tempId)
    {
        // 初始化REST SDK
        $rest = new REST(SERVER_IP, SERVER_PORT, SOFT_VERSION);
        $rest->setAccount(ACCOUNT_SID, ACCOUNT_TOKEN);
        $rest->setAppId(APP_ID);

        // 发送模板短信
        echo "Sending TemplateSMS to $phone <br/>";
        $result = $rest->sendTemplateSMS($phone, array($params['code'], $params['expires']), $tempId);
        if ($result == NULL) {
            echo "result error!";
            return;
        }
        if ($result->statusCode != 0) {
            echo "error code :" . $result->statusCode . "<br>";
            echo "error msg :" . $result->statusMsg . "<br>";
        } else {
            echo "Sendind TemplateSMS success!<br/>";
            // 获取返回信息
            $smsmessage = $result->TemplateSMS;
            echo "dateCreated:" . $smsmessage->dateCreated . "<br/>";
            echo "smsMessageSid:" . $smsmessage->smsMessageSid . "<br/>";
        }
    }

//    function sendByMob($phone, array $params, $timeout = 30)
//    {
//        $param = array('appkey' => APP_KEY,
//            'phone' => $phone,
//            'zone' => '86',
//            'code' => $params['code']);
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, RESP_ADDR);
//        // 以返回的形式接收信息
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        // 设置为POST方式
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
//        // 不验证https证书
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
//            'Accept: application/json',
//        ));
//        // 发送数据
//        $response = curl_exec($ch);
//        // 不要忘记释放资源
//        curl_close($ch);
//
//        // by file_get_content()
////
////        $options = array(
////            'http' => array(
////                'method' => 'POST',
////                'header' => "Content-Type: application/x-www-form-urlencoded;charset=UTF-8;Accept: application/json",
////                'content' => $params
////            )
////        );
////        $response = file_get_contents(SECURITYCODE_RESP_ADDR, false, stream_context_create($options));
//        return $response;
//    }

}


