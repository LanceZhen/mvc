<?php
require_once '../include/init.php';
$act = _get('act');
$id = _get('id')+0;

$data = $_POST;
switch ($act){
    //增加栏目
    case 'addCate':
        $cate = new cateModel();
        
        $cate->_autoFilter($data);
        $cate->_autoFill($data);
        if(!$cate->_autoValidate($data)){
            echo '数据不合法！';
            exit(implode(',', $cate->getError()));
        }
        if($cate->addCate($data)){
            echo '成功';
            header('location:./cateList.php');
        }
        break;
    //修改栏目
    case 'modCate':
        $cate = new cateModel();
        $data = $_POST;
        $cateId = _post('cate_id') + 0;
        $data['parent_id'] = _post('parent_id') + 0;
        
        // $trees = $cate->getTree($data['parent_id']);
        // var_dump($trees);exit();
        // 判断自身是否在父栏目的家谱树里面
        // $flag = true;
        // foreach ($trees as $v){
        //     if($v['cate_id'] == $cateId){
        //         $flag = false;
        //         break;
        //     }
        // }
        // if(!$flag){
        //     exit('上级栏目选取不正确');
        // }
        
        $cate->updata($data, $id);
        header('location:./cateList.php');
    	break;
    //删除栏目	
    case 'delCate':
        $cate = new cateModel();
        
        $rows = $cate->getSon($id);
      
        if(!empty($rows)){
            exit('有子栏目，不能删除');
        }
        if($cate->del($id)){
            header('location:./cateList.php');
        }else {
            echo '删除失败';
        }
        break;
}