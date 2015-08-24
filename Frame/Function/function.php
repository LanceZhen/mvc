<?php
/**实例化模型
 * @param $name
 * @return mixed
 */
function M($name)
{
    require_once(ROOT . 'Lib/Model/' . $name . 'Model.class.php');
    $obj = null;
    eval('$obj = new ' . $name . 'Model();');
    return $obj;
}

/**实例化视图
 * @param $name
 * @return mixed
 */
function V($name)
{
    require_once(ROOT . 'Lib/View/' . $name . 'View.class.php');
    $obj = null;
    eval('$obj = new ' . $name . 'View();');
    return $obj;
}

/**实例控制器并执行方法
 * @param $name
 * @param $method
 */
function C($name, $method)
{
    require_once(ROOT . 'Lib/Controller/' . $name . 'Controller.class.php');
    eval('$obj = new ' . $name . 'Controller(); $obj->' . $method . '();');
}

/**引入并配置第三方类厍
 * @param $path 路径
 * @param $name 类名
 * @param array $params 参数
 * @return mixed
 */
function ORG($path, $name, $params = array())
{
    require_once(ROOT . 'Lib/ORG/' . $path . $name . '.class.php');
    $obj = new $name();
    if (!empty($params)) {
        foreach ($params as $k => $v) {
            $obj->$k = $v;
        }
    }
    return $obj;
}

/**过滤传入数据
 * @param $arr
 * @return $arr
 */
if (!get_magic_quotes_gpc()) {
    $get = _addslashes($_GET);
    $post = _addslashes($_POST);
    $cookie = _addslashes($_COOKIE);
}
function _addslashes($arr)
{
    foreach ($arr as $k => $v) {
        if (is_numeric($v)) {
            $arr[$k] = intval($v);
        } else if (is_string($v)) {
            $arr[$k] = addslashes($v);
        } else if (is_array($v)) {
            $arr[$k] = _addslashes($v);
        }
    }
    return $arr;
}

//常用函数封装
//加密解密
header('Content-type:text/html; charset=utf-8');
/**
 * @param $key
 * @param $string
 * @param $decrypt
 * @return string  0加密 1解密
 */
function encryptDecrypt($key, $string, $decrypt)
{
    if ($decrypt) {
        $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "12");
        return $decrypted;
    } else {
        $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
        return $encrypted;
    }
}

////加密：
//echo encryptDecrypt('password', 'Helloweba欢迎您',0).'<br>';
////解密：
//echo encryptDecrypt('password', 'z0JAx4qMwcF+db5TNbp/xwdUM84snRsXvvpXuaCa4Bk=',1);

/**生成随机字符串
 * @param int $length
 * @return string
 */
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
//echo generateRandomString(5);

/**获取文件扩展名
 * @param $filename
 * @return mixed
 */
function getExtension($filename)
{
    $myext = substr($filename, strrpos($filename, '.'));
    return str_replace('.', '', $myext);
}
//echo getExtension('adminModel.class.php');

/**获取文件大小并格式化
 * @param $size
 * @return string
 */
function formatSize($path)
{
    if(!file_exists($path)){
        return '文件不存在';
    }
    $size = filesize($path);
    $sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
    if ($size == 0) {
        return ('n/a');
    } else {
        return (round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . $sizes[$i]);
    }
}

//echo $thefile = formatSize('../start.php');

/**PHP替换标签字符
 * @param $string
 * @param $replacer
 * @return mixed
 */
function stringParser($string, $replacer)
{
    $result = str_replace(array_keys($replacer), array_values($replacer), $string);
    return $result;
}
//echo stringParser('aaabbbccc',array('a'=>'1','b'=>2));

/**列出目录下的文件兼容PHP4和PHP5的写法
 * @param $directory
 * @return array
 */
function getFileList($directory) {
    $files = array();
    if(is_dir($directory)) {
        if($dh = opendir($directory)) {
            while(($file = readdir($dh)) !== false) {
                if($file != '.' && $file != '..') {
                    $files[] = $file;
                }
            }
            closedir($dh);
        }
    }
    return $files;
}
//var_dump(getFileList('../../Frame'));

/**获取当前页面的url
 * @return string
 */
function curPageURL()
{
    $pageURL = 'http';
    if (!empty($_SERVER['HTTPS'])) {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
//echo curPageURL();

/**强制下载
 * @param $filename
 */
function download($filename)
{
    if ((isset($filename)) && (file_exists($filename))) {
        header("Content-length: " . filesize($filename));
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        readfile("$filename");
    } else {
        echo "Looks like file does not exist!";
    }
}
//download('./function.php');

/*
 Utf-8、gb2312都支持的汉字截取函数
 cut_str(字符串, 截取长度, 开始长度, 编码);
 编码默认为 utf-8
 开始长度默认为 0
*/
function cutStr($string, $sublen, $start = 0, $code = 'UTF-8')
{
    if ($code == 'UTF-8') {
        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
        preg_match_all($pa, $string, $t_string);
        if (count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen)) . "...";
        return join('', array_slice($t_string[0], $start, $sublen));
    } else {
        $start = $start * 2;
        $sublen = $sublen * 2;
        $strlen = strlen($string);
        $tmpstr = '';
        for ($i = 0; $i < $strlen; $i++) {
            if ($i >= $start && $i < ($start + $sublen)) {
                if (ord(substr($string, $i, 1)) > 129) {
                    $tmpstr .= substr($string, $i, 2);
                } else {
                    $tmpstr .= substr($string, $i, 1);
                }
            }
            if (ord(substr($string, $i, 1)) > 129) $i++;
        }
        if (strlen($tmpstr) < $strlen) $tmpstr .= "...";
        return $tmpstr;
    }
}

//echo cutStr('jQuery插件实现的加载图片和页面效果',15);
//获取用户真实IP
function getIp()
{
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
    else
        if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else
            if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
                $ip = getenv("REMOTE_ADDR");
            else
                if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
                    $ip = $_SERVER['REMOTE_ADDR'];
                else
                    $ip = "unknown";
    return ($ip);
}

//echo getIp();
/**防止注入
 * @param $sql_str
 * @return mixed
 */
function injCheck($sql_str)
{
    $check = preg_match('/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/', $sql_str);
    if ($check) {
        echo '非法字符！！' . $sql_str;
        exit;
    } else {
        return $sql_str;
    }
}

//echo injCheck('select');
//页面提示跳转
function message($msgTitle, $message, $jumpUrl,$time=2000)
{
    $str = '<!DOCTYPE HTML>';
    $str .= '<html>';
    $str .= '<head>';
    $str .= '<meta charset="utf-8">';
    $str .= '<title>页面提示</title>';
    $str .= '<style type="text/css">';
    $str .= '*{margin:0; padding:0}a{color:#369; text-decoration:none;}a:hover{text-decoration:underline}body{height:100%; font:12px/18px Tahoma, Arial,  sans-serif; color:#424242; background:#fff}.message{width:450px; height:120px; margin:16% auto; border:1px solid #99b1c4; background:#ecf7fb}.message h3{height:28px; line-height:28px; background:#2c91c6; text-align:center; color:#fff; font-size:14px}.msg_txt{padding:10px; margin-top:8px}.msg_txt h4{line-height:26px; font-size:14px}.msg_txt h4.red{color:#f30}.msg_txt p{line-height:22px}';
    $str .= '</style>';
    $str .= '</head>';
    $str .= '<body>';
    $str .= '<div class="message">';
    $str .= '<h3>' . $msgTitle . '</h3>';
    $str .= '<div class="msg_txt">';
    $str .= '<h4 class="red">' . $message . '</h4>';
    $str .= '<p>系统将在 <span style="color:blue;font-weight:bold">3</span> 秒后自动跳转,如果不想等待,直接点击 <a href="{$jumpUrl}">这里</a> 跳转</p>';
    $str .= "<script>setTimeout('location.replace(\'" . $jumpUrl . "\')',{$time})</script>";
    $str .= '</div>';
    $str .= '</div>';
    $str .= '</body>';
    $str .= '</html>';
    echo $str;
}
//message('提示', '保存成功！', 'http://www.baidu.com',2000);
/**时间长度转换
 * @param $seconds
 * @return string
 */
function changeTimeType($seconds)
{
    if ($seconds > 3600) {
        $hours = intval($seconds / 3600);
        $minutes = $seconds % 3600;
        $time = $hours . ":" . gmstrftime('%M:%S', $minutes);
    } else {
        $time = gmstrftime('%H:%M:%S', $seconds);
    }
    return $time;
}

//echo changeTimeType(60);
/**记录日志
 * @param $str
 */
function logResult($str)
{
    $fh = fopen('./log.txt', 'ab');
    flock($fh, LOCK_EX);//1. LOCK_SH 取得共享锁定（读取的程序）。
    //2. LOCK_EX  取得独占锁定（写入的程序。
    //3. LOCK_UN  释放锁定（无论共享或独占）。
    fwrite($fh, '执行时间：' . strftime('%Y/%m/%d %H:%M:%S', time()) . "\n" . $str . "\n");
    flock($fh, LOCK_UN);
    fclose($fh);
}

//logResult('出错了');

?>
