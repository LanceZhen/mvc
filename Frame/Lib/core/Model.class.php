<?php
/**
 * 模型类.
 * User: HX1501388
 * Date: 2015/8/24
 * Time: 10:14
 */
//$m = new Model();
//$arr = array('name'=>'','pass'=>'');
//var_dump($m->_autoValid($arr));
//var_dump($m->getError());
class Model{
    protected $table = '';//表名
    protected $pk = '';//主键
    protected $field = array();//字段

    protected $_pad = array(array());//自动填充
    protected $_valid = array(//自动验证  array('验证的字段名',0/1/2(验证场景),'报错提示','require/in(某几种情况)/between(范围)/length(某个范围)','参数')
        array()
    );

    protected $error = array();//错误数组

    //过程自动化
    public function _auto($data){
        $data = $this->_autoPad($this->_autoFilter($data));
        $flag = $this->_autoValid($data);
        return $flag ? $data : false;

    }
    /**自动过滤
     * @param array $arr
     * @return array
     */
    public function _autoFilter($arr = array()){
        $data = array();
        foreach($arr as $k => $v){
            if(in_array($k,$this->field)){
                $data[$k] = $v;
            }
        }
        return $data;
    }

    /**自动填充
     * @param $data
     * @return mixed
     */
    public  function _autoPad($data){
        foreach($this->_pad as $k => $v){
            if(!array_key_exists($v[0],$data)){
                switch($v[1]){
                    case 'value':
                        $data[$v[0]] = $v[2];
                        break;
                    case 'function':
                        $data[$v[0]] = call_user_func($v[2]);
                        break;
                }
            }
        }
        return $data;
    }

    /**自动验证
     * @param $data
     * @return bool
     */
    public function _autoValid($data){
        if(empty($this->_valid)){
            return true;
        }
        $this->error = array();

        foreach($this->_valid as $k => $v){
            switch(intval($v[1])){
                case 0://可以没有值，但如果有值就要验证
                    if(!empty($data[$v[0]])){
                        if(!isset($v[4]))
                            $v[4] = '';
                        if($this->valid($v[3],$data[$v[0]],$v[4],$v[2]) === false){
                            return false;
                        };
                    }
                    break;
                case 1://一定要有值，而且验证
                    if(!isset($data[$v[0]])){
                        $this->error[] = $v[2];
                        return false;
                    }
                    if(!isset($v[4]))
                        $v[4] = '';
                    if($this->valid($v[3],$data[$v[0]],$v[4],$v[2]) === false){
                        return false;
                    };
                    break;
                case 2://有值并且不为空时
                    if(isset($data[$v[0]])&&!empty($data[$v[0]])){
                        if($this->valid($v[3],$data[$v[0]],$v[4],$v[2]) === false){
                            return false;
                        };
                    }
                    break;
            }
        }
        return true;
    }

    /**验证并记录错误
     * @param $v3
     * @param $v0
     * @param $v4
     * @param $v2
     * @return bool
     */
    public function valid($v3,$v0,$v4,$v2){
        if(!$this->checkData($v3,$v0,$v4)){
            $this->error[] = $v2;
            return false;
        }
    }

    /**验证数据
     * @param $rule
     * @param $value
     * @param $args
     * @return bool|mixed
     */
    public function checkData($rule,$value,$args){
        //验证通过,返回Ture
        switch($rule){
            case 'require':
                return isset($value) && strlen(trim($value)) > 0;
                break;
            case 'number':
                return is_numeric($value);
                break;
            case 'date':
                return is_date($value);
                break;
            case 'email':
                return filter_var($value, FILTER_VALIDATE_EMAIL);
                break;
            case 'in':
                $arr = explode(',',$args);
                return in_array($value,$arr);
                break;
            case 'between':
                list($min,$max) = explode(',',$args);
                return $value >= $min && $value <= $max;
                break;
            case 'length':
                list($min,$max) = explode(',',$args);
                return strlen($value) >= $min && strlen($value) <= $max;
                break;

            default:
                return false;
        }
    }

    /**获得错误数组
     * @return array
     */
    public function getError(){
        return $this->error;
    }

    /**添加
     * @param $data
     * @return mixed
     */
    public function insert($data){
        return Db::insert($this->table,$data);
    }

    /**删除
     * @param $id
     * @return mixed
     */
    public function delete($id){
        if(is_array($id)){
            $id = 'in('.implode(',',$id).')';
        }else{
            $id = " = $id";
        }
        return Db::delete($this->table,"{$this->pk} {$id}");
    }

    /**修改
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data,$id){
        if(is_array($id)){
            $id = 'in('.implode(',',$id).')';
        }else{
            $id = " = $id";
        }
        return Db::update($this->table,$data,"{$this->pk} {$id}");
    }

    /**获取一条记录
     * @param string $filed
     * @param $id
     * @param string $orderBy
     * @param string $sort
     * @param string $limit
     * @return mixed
     */
    public function fetchOne($filed = '*',$id,$orderBy='',$sort='',$limit=''){
        Db::select($this->table,$filed,array($this->pk => $id),$orderBy,$sort,$limit);
        return Db::fetchOne();
    }

    /**获取全部记录
     * @param string $filed
     * @param $id
     * @param string $orderBy
     * @param string $sort
     * @param string $limit
     * @return mixed
     */
    public function fetchAll($filed = '*',$where = array(),$orderBy='',$sort='',$limit=''){
        Db::select($this->table,$filed,$where,$orderBy,$sort,$limit);
        return Db::fetchAll();
    }

    /**获得记录条数
     * @return mixed
     */
    public function getCount(){
        return Db::getCount();
    }

}
