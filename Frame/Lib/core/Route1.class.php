<?php
/**
 * url路由类
 */


header('content-type:text/html; charset=utf-8');
define('MODULE_DIR', './classes/');
$_file_ = str_replace('\\','/',__FILE__);
$APP_PATH = str_replace($_SERVER['DOCUMENT_ROOT'], '', $_file_);//当前运行脚本所在的文档根目录,在服务器配置文件中定义。  __FILE__ 取得当前文件的绝对地址
//var_dump($APP_PATH,$_SERVER['REQUEST_URI'],$_SERVER['DOCUMENT_ROOT'],__FILE__);
$SE_STRING = str_replace($APP_PATH, '', $_SERVER['REQUEST_URI']);    //计算出index.php后面的字段 index.php/controller/methon/id/3
$SE_STRING = trim($SE_STRING, '/');
var_dump($SE_STRING);
//echo $SE_STRING.'<br>';

//这里需要对$SE_STRING进行过滤处理。
$ary_url = array(
    'controller' => 'index',
    'method' => 'index',
    'params' => array()
);
//var_dump($ary_url);
$ary_se = explode('/', $SE_STRING);
//var_dump($ary_se);
$se_count = count($ary_se);

//路由控制
if ($se_count == 1 and $ary_se[0] != '') {

    $ary_url['controller'] = $ary_se[0];

} else if ($se_count > 1) {//计算后面的参数，key-value
    $ary_url['controller'] = $ary_se[0];
    $ary_url['method'] = $ary_se[1];
    if ($se_count > 2 and $se_count % 2 != 0) { //没有形成key-value形式
        die('参数错误');
    } else {
        for ($i = 2; $i < $se_count; $i = $i + 2) {

            $ary_kv_hash = array(strtolower($ary_se[$i]) => $ary_se[$i + 1]);

            $ary_url['params'] = array_merge($ary_url['params'], $ary_kv_hash);
        }
    }
}

var_dump($ary_url);

//exit;
$module_name = $ary_url['controller'];

$module_file = MODULE_DIR . $module_name . '.class.php';
//echo $module_file;
$method_name = $ary_url['method'];

if (file_exists($module_file)) {
    include($module_file);

    $obj_module = new $module_name();    //实例化模块m

    if (!method_exists($obj_module, $method_name)) {
        die('方法不存在');

    } else {
        if (is_callable(array($obj_module, $method_name))) {    //该方法是否能被调用
            var_dump($ary_url['params']);
            $get_return = $obj_module->$method_name($ary_url['params']);    //执行a方法,并把key-value参数的数组传过去
            if (!is_null($get_return)) { //返回值不为空
                var_dump($get_return);
            }
        } else {
            die('该方法不能被调用');
        }

    }
} else {
    die('模块文件不存在');
}
