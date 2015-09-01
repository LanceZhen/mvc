<?php
/**
 * 文件上传类
 * User: HX1501388
 * Date: 2015/9/1
 * Time: 11:03
 */
class Upload{
    protected $allowExt = 'jpeg,jpg,gif,png';
    protected $maxSize = 2;//单位为M

    protected $error = 0;
    protected $errorMsg = array(
        0 => '正确',
        //文件系统
        1 => '上传文件超出系统限制',
        2 => '上传文件大小超出网页表单页面',
        3 => '文件只有部分被上传',
        4 => '没有文件被上传',
        6 => '找不到临时文件夹',
        7 => '文件写入失败',
        //自定义
        8 => '不是真正的图片',
        9 => '不是通过HTTP-POST上传的文件',
        10=>'文件格式不正确',
        11=>'文件超过指定大小',
        12=>'创建目录失败',
        13=>'文件移动失败'
    );

    /**上传主程序
     * @param $name
     * @return bool
     */
    public function up($name){
        //检验上传状态
        if(!isset($_FILES[$name])){
            return false;
        }
        $f = $_FILES[$name];
        if($f['error']){
            $this->error = $f['error'];
            return false;
        }
        //是否为真正图片类型
        if(!getimagesize($f['tmp_name'])){
            $this->error = 8;
            return false;
        }
        //是否为http post方式上传
        if(!is_uploaded_file($f['tmp_name'])){
            $this->error = 9;
            return false;
        }
        //获取后缀
        $ext = getExt($f['name']);
        //检查后缀
        if(!in_array(strtolower($ext),explode(',',$this->allowExt))){
            $this->error = 10;
            return false;
        }
        //检查大小
        if($f['size'] > $this->maxSize*1048576){
            $this->error = 11;
            return false;
        }
        //创建目录
        $dir = $this->mkDir();
        if(!$dir){
            $this->error = 12;
            return false;
        }
        //生成随机文件名,并组成路径
        $path = $dir.'/'.generateUniqueString().'.'.$ext;
        //移动文件
        if(!move_uploaded_file($f['tmp_name'],$path)){
            $this->error = 13;
        }else{
            return $path;
        }
    }

    /**建立目录
     * @return bool|string
     */
    public function mkDir(){
        $dir = ROOT.'data/img/'.date('Ym/d');
        if(is_dir($dir) || mkdir($dir,0777,true)){
            return $dir;
        }else{
            return false;
        }
    }

    /**获取错误
     * @return mixed
     */
    public function getError(){
        return $this->errorMsg[$this->error];
    }
}

/*
 * 多文件上传信息构建
function buildInfo(){
	if(!$_FILES){
		return ;
	}
	$i=0;
	foreach($_FILES as $v){
		//单文件
		if(is_string($v['name'])){
			$files[$i]=$v;
			$i++;
		}else{
			//多文件
			foreach($v['name'] as $key=>$val){
				$files[$i]['name']=$val;
				$files[$i]['size']=$v['size'][$key];
				$files[$i]['tmp_name']=$v['tmp_name'][$key];
				$files[$i]['error']=$v['error'][$key];
				$files[$i]['type']=$v['type'][$key];
				$i++;
			}
		}
	}
	return $files;
}
 */