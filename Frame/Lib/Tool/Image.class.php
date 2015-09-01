<?php
/**
 * 图片处理类
 * User: HX1501388
 * Date: 2015/9/1
 * Time: 15:26
 */
//define('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))).'/');

class Image{
    //生成验证码
    public static function captcha($length = 4, $pixel = 15, $line = 3){
        //创建画布
        $width = 82;
        $height = 28;
        $image = imagecreatetruecolor($width,$height);
        //分配颜色
        $white = imagecolorallocate($image,255,255,255);
        $black = imagecolorallocate($image,0,0,0);
        //填充画布
        imagefilledrectangle($image,1,1,$width - 2,$height - 2,$white);
        //产生随机字符串
        $str = 'abcdefghijkmnpqrstuvwxy3456789';
        $chars = substr(str_shuffle($str),0,$length);
        session_start();
        $_SESSION['captcha'] = $chars;
        $fonts = array('SIMYOU.TTF');
        //写入字符串
        for($i = 0 ; $i < $length ;$i++){
            $size = rand(14,20);
            $angle = rand(-15,15);
            $x = 5 + $size*$i;
            $y = rand(20,26);
            $color = imagecolorallocate($image,rand(50,205),rand(50,205),rand(50,205));
            $fontFile = '../../../data/font/'.$fonts[rand(0,count($fonts)-1)];
            $text = substr($chars,$i,1);
            imagettftext($image,$size,$angle,$x,$y,$color,$fontFile,$text);
        }
        //设置干扰点
        if($pixel){
            for($i = 0; $i < $pixel; $i++){
                imagesetpixel($image,rand(0,$width),rand(0,$height),$black);
            }
        }
        //设置干扰线
        if($line){
            for($i = 0; $i < $line; $i++){
                $color = imagecolorallocate($image,rand(50,205),rand(50,205),rand(50,205));
                imageline($image,rand(0,$width),rand(0,$height),rand(0,$width),rand(0,$height),$color);
            }
        }
        //输出
        header('content-type:image/png');
        imagepng($image);
        imagedestroy($image);
    }
}
Image::captcha();