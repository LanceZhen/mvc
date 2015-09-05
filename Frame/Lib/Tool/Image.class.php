<?php
/**
 * 图片处理类
 * User: HX1501388
 * Date: 2015/9/1
 * Time: 15:26
 */
class Image{
    /**生成验证码
     * @param int $length
     * @param int $pixel
     * @param int $line
     */
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
//        session_start();
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

    /**读取图片信息
     * @param $filename
     * @return array|bool
     */
    public static function imgInfo($filename){
        if(!file_exists($filename)){
            return false;
        }
        $info = getimagesize($filename);
        if(!$info){
            return false;
        }
        $img = array();
        $img['width'] = $info[0];
        $img['height'] = $info[1];
        $img['ext'] = substr($info['mime'],strpos($info['mime'],'/')+1);

        return $img;
    }

    /**水印
     * @param $dst
     * @param $water
     * @param null $save
     * @param int $pos
     * @param int $alpha
     * @return bool
     */
    public static function water($dst,$water,$save = null,$pos = 4,$alpha = 100){
        //检测两张图片是否存在
        if(!file_exists($dst) || !file_exists($water)){
            echo '图片不存在';
            return false;
        }
        //水印图片不能大于操作图
        $dstInfo = self::imgInfo($dst);
        $waterInfo = self::imgInfo($water);
        if($waterInfo['width'] > $dstInfo['width'] || $waterInfo['height'] > $dstInfo['height']){
            echo '水印图尺寸不能大于操作图';
            return false;
        }
        //把两张图片读到画布
        $dstFun = 'imagecreatefrom'.$dstInfo['ext'];
        $waterFun = 'imagecreatefrom'.$waterInfo['ext'];
        if(!function_exists($dstFun) || !function_exists($waterFun)){
            return false;
        }
        //动态调用函数创建画布
        $dstImg = $dstFun($dst);
        $waterImg = $waterFun($water);
        //计算水印粘贴位置
        switch($pos){
            case 1:
                $dstX = 0;
                $dstY = 0;
                break;
            case 2:
                $dstX = $dstInfo['width'] - $waterInfo['width'];
                $dstY = 0;
                break;
            case 3:
                $dstX = 0;
                $dstY = $dstInfo['height'] - $waterInfo['height'];
                break;
            case 4:
                $dstX = $dstInfo['width'] - $waterInfo['width'];
                $dstY = $dstInfo['height'] - $waterInfo['height'];
                break;
            default:
                echo '水印位置不正确';
                exit;
        }
        //加水印
        imagecopymerge($dstImg,$waterImg,$dstX,$dstY,0,0,$waterInfo['width'],$waterInfo['height'],$alpha);
        //保存
        if(empty($save)){
            $save = $dst;
            unlink($dst);
        }

        $createFun = 'image'.$dstInfo['ext'];
        $createFun($dstImg,$save);
        //销毁
        imagedestroy($dstImg);
        imagedestroy($waterImg);
        return true;
    }

    /**缩略图
     * @param $dst
     * @param null $save
     * @param int $width
     * @param int $height
     * @return bool
     */
    public static function thumb($dst,$save = null,$width = 200,$height = 200){
        $dstInfo = self::imgInfo($dst);
        if(!$dstInfo){
            echo '读取图片信息出错';
            return false;
        }
        //计算缩放比例
        $scale = min($width/$dstInfo['width'],$height/$dstInfo['height']);
        $srcFun = 'imagecreatefrom'.$dstInfo['ext'];
        $srcImg = $srcFun($dst);

        $dstImg = imagecreatetruecolor($width,$height);
        $white = imagecolorallocate($dstImg,255,255,255);
        imagefill($dstImg,0,0,$white);

        $dstW = (int)$dstInfo['width']*$scale;
        $dstH = (int)$dstInfo['height']*$scale;

        $dstX = ($width - $dstW)/2;
        $dstY = ($height - $dstH)/2;

        $srcW = $dstInfo['width'];
        $srcH = $dstInfo['height'];

        imagecopyresampled($dstImg,$srcImg,$dstX,$dstY,0,0,$dstW,$dstH,$srcW,$srcH);
        if(empty($save)){
            $save = $dst;
            unlink($dst);
        }
        $createFun = 'image'.$dstInfo['ext'];
        $createFun($dstImg,$save);
        //销毁
        imagedestroy($dstImg);
        return true;
    }
}