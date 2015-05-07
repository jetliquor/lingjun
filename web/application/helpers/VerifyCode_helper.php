<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: JLI
 * Date: 15-5-7
 * Time: 上午9:19
 */

if (!function_exists('GenVerifyCode')) {
    function GenVerifyCode($codeNum = 4, $codeWidth = 80, $codeHeight = 40)
    {
        $code = ' ';
        for ($i = 0; $i < $codeNum; $i++) { //生成验证码
            switch (rand(0, 2)) {
                case 0:
                    $code[$i] = chr(rand(48, 57));
                    break; //数字
                case 1:
                    $code[$i] = chr(rand(65, 90));
                    break; //大写字母
                case 2:
                    $code[$i] = chr(rand(97, 122));
                    break; //小写字母
            }
        }
        $image = imagecreate($codeWidth, $codeHeight);
        imagecolorallocate($image, 255, 255, 255);
        //生成干扰像素
        for ($i = 0; $i < 80; $i++) {
            $dis_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
            imagesetpixel($image, rand(1, $codeWidth), rand(1, $codeHeight), $dis_color);
        }
        //打印字符到图像
        for ($i = 0; $i < $codeNum; $i++) {
            $char_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
            imagechar($image, 60, ($codeWidth / $codeNum) * $i, rand(0, 5), $code[$i], $char_color);
        }

        return array('code' => $code, 'image' => $image);
    }
}


