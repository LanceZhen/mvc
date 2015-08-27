<?php
//$dbh = new PDO('mysql:host=localhost;dbname=access_control', 'root', '');
//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$dbh->exec('set names utf8');
///*添加*/
////$sql = "INSERT INTO `user` SET `login`=:login AND `password`=:password";
//$sql = "INSERT INTO `user` (`login` ,`password`)VALUES (:login, :password)";  $stmt = $dbh->prepare($sql);  $stmt->execute(array(':login'=>'kevin2',':password'=>''));
//echo $dbh->lastinsertid();
///*修改*/
//$sql = "UPDATE `user` SET `password`=:password WHERE `user_id`=:userId";
//$stmt = $dbh->prepare($sql);
//$stmt->execute(array(':userId'=>'7', ':password'=>'4607e782c4d86fd5364d7e4508bb10d9'));
//echo $stmt->rowCount();
///*删除*/
//$sql = "DELETE FROM `user` WHERE `login` LIKE 'kevin_'"; //kevin%
//$stmt = $dbh->prepare($sql);
//$stmt->execute();
//echo $stmt->rowCount();
///*查询*/
//$login = 'kevin%';
//$sql = "SELECT * FROM `user` WHERE `login` LIKE :login";
//$stmt = $dbh->prepare($sql);
//$stmt->execute(array(':login'=>$login));
//while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//    print_r($row);
//}
//print_r( $stmt->fetchAll(PDO::FETCH_ASSOC));
/*//pdo连接信息
$pdo=array("mysql:host=localhost;dbname=demo;charset=utf8","root","");
//开始连接数据库
$db = Mysql::newClass();
$db->pdoConnect($pdo);


$updateRow = array(
  "user_id" => "2",
  "meta_key" => "username"
);

//$db->select("wp_usermeta"); //发送sql
//$result=$db->selectOne(); //获取一条数据
//$db->selectCount(); //获取全部

//$db->update("wp_usermeta",$updateRow,"umeta_id=1"); //更新信息
//$db->insert("wp_usermeta",$updateRow); //插入数据
//echo $db->lastinsertid(); //获取插入后的id
//$db->delete("wp_usermeta","umeta_id>18"); //删除数据*/
//            $test = M('Test');
//            echo $test->add('tb_user',array('name'=>'lance','pass'=>'0000'));
//             echo $test->update('tb_user',array('name'=>'lance','pass'=>'000'),'id = 1');
//            echo $test->del('tb_user','id = 3');
//select($table='', $fields='', $where='', $orderBy='', $sort='', $limit='')
//        $test->select('tb_user','id,name,pass',array('name'=>'lance','pass'=>'111'),'id','desc','2,4');
//             var_dump($test->fetchAll());
//            View::assign(array('title'=>'加油'));
//            View::display('admin/test.html');

class Mysql
{
    private static $object;
    private $PDO = null;
    private $prepare;

    //单例模式 start
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!(self::$object instanceof self)) {
            self::$object = new self;
        }
        return self::$object;
    }

    public function __clone()
    {
        trigger_error('Clone is not allow!', E_USER_ERROR);
    }
    //单例模式 end

    //连接pdo
    public function pdoConnect($config)
    {
        try {
            $this->PDO = new PDO("mysql:host={$config['HOST']}; dbname={$config['NAME']}; charset={$config['CHARSET']}", $config['USER'], $config['PASS']);
//            $this->PDO->exec("set names '{$config['charset']}'");
            //设置持久连接
            $this->PDO->setAttribute(PDO::ATTR_PERSISTENT, true);
            //设置抛出错误
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //设置当字符串为空时转换为sql的null
            $this->PDO->setAttribute(PDO::ATTR_ORACLE_NULLS, true);
            //由MySQL完成变量的转义处理  防止sql注入  关闭预处理模拟
            $this->PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            $this->Msg("PDO连接错误信息：" . $e->getMessage());
        }
    }

    //错误提示
    private function Msg($error = "")
    {
        echo $error;
        exit;
    }

    /*
     *
     * insert,delete,update操作
     *
     * */
    public function insert($table, $row)
    {
        $sql = $this->sqlCreate("insert", $table, $row);
        return $result = $this->sqlExec($sql);
    }

    public function update($table, $row, $where)
    {
        $sql = $this->sqlCreate("update", $table, $row, $where);
        return $result = $this->sqlExec($sql);
    }

    public function delete($table, $where)
    {
        $sql = $this->sqlCreate("delete", $table, "", $where);
        return $result = $this->sqlExec($sql);
    }

    //服务于insert,update,delete，生成sql
    private function sqlCreate($action, $table, $row = "", $where = "")
    {
        $actionArr = array(
            "insert" => "insert into ",
            "update" => "update ",
            "delete" => "delete from "
        );
        $row = empty($row) ? "" : $this->rowCreate($row);
        $where = empty($where) ? "" : " where " . $where;
        $sql = $actionArr[$action] . $table . $row . $where;
        return $sql;
    }

    //拼成row
    private function rowCreate($row)
    {
        $sql_row = " set ";
        foreach ($row as $key => $val) {
            $sql_row .= $key . "='" . $val . "',";
        }
        return trim($sql_row, ",");
    }


    //执行sql，返还影响行数
    public function sqlExec($sql)
    {
        Log::write($sql);
        try {
            $result = $this->PDO->exec($sql);
        } catch (PDOException $e) {
            $this->Msg($e->getMessage());
        }
        return $result;
    }

    //获取insert插入的id
    public function getLastInsertId()
    {
        return $this->PDO->lastinsertid();
    }

    /*
     *
     * select 部分
     * */
//    执行SQL
    /* public function execute($sql)
     {
         try {
             $stmt = $this->PDO->prepare($sql);
             $stmt->execute($arr);
         } catch (PDOException  $e) {
             exit('SQL语句：' . $sql . '<br />错误信息：' . $e->getMessage());
         }
         return $stmt;
     }*/
    public function select($table, $fields, $where, $orderBy, $sort, $limit)
    {
        $fields = empty($fields) ? "*" : $fields;
        $sqlSelect = $this->sqlCreateSelect($table, $fields, $where, $orderBy, $sort, $limit);
        $this->query($sqlSelect, $where);
    }

    //生成select sql
    private function sqlCreateSelect($table, $fields, $where, $orderBy, $sort, $limit)
    {
        $whereSql = empty($where) ? " 1=1 " : $this->whereCreate($where);
        $orderBySql = empty($orderBy) ? "" : " order by " . $orderBy . " " . $sort;
        $limitSql = empty($limit) ? "" : " limit " . $limit;
        $sql = "select $fields from $table where " . $whereSql . $orderBySql . $limitSql;
        return $sql;
    }

    private function whereCreate($where)
    {
        $whereSql = " ";
        foreach ($where as $key => $val) {
            $whereSql .= $key . "=:" . $key . " and ";
        }
        return $whereSql . " 1=1 ";
    }

    //执行select sql
    private function query($sql, $where = '')
    {
        try {
            log::write($sql);
            $this->prepare = $this->PDO->prepare($sql);

        } catch (PDOException $e) {
            $this->Msg("预处理sql出错信息:" . $e->getMessage() . "<br>sql:(" . $sql . ")");
        }
        empty($where) ? "" : $this->bind($where);
        $this->prepare->execute();
    }

    private function bind($where)
    {
        foreach ($where as $key => $val) {
            $this->prepare->bindValue(":" . $key, $val);
        }
    }

    /*select获取数据*/
    //获取一条
    public function fetchOne()
    {
        $result = $this->prepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //获取全部数据
    public function fetchAll()
    {
        $result = $this->prepare->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /**获得字段值
     * @param $filed
     * @return bool
     */
    public function getValueByFiled($filed){
        $arr = $this->fetchOne();
        foreach($arr as $k => $v){
            if($filed == $k){
                return $v;
            }
        }
        return false;
    }

    //获取查询记录数
    public function getCount()
    {
        $total = $this->prepare->rowCount();
        return $total;
    }

    /**获得mysql版本号
     * @return bool
     */
    public function getVersion(){
        $this->query('select version() as ver');
        return $this->getValueByFiled('ver');
    }

    /**获得系统占用数据库空间大小
     * @param $dbName
     * @param $tblPrefix
     * @return int
     */
    public function getDBSize($dbName,$tblPrefix){
        $sql = "show table status from $dbName";
        if($tblPrefix != null){
            $sql .= " like '$tblPrefix%'";
        }
        $this->query($sql);
        $size = 0;
        while($rs = $this->fetchOne()){
            $size += $rs['Data_length'] + $rs['Index_length'];
        }
        return $size;
    }

}
// class Mysql
// {
//     //pdo对象
//     private $_pdo = null;
//     //用于存放实例化的对象
//     static private $_instance = null;

//     //公共静态方法获取实例化的对象
//     public static function getInstance($config)
//     {
//         if (!(self::$_instance instanceof self)) {
//             self::$_instance = new self($config);
//         }
//         return self::$_instance;
//     }

//     //私有克隆
//     private function __clone()
//     {
//     }

//     //私有构造
//     private function __construct($config)
//     {
//         try {
//             $this->_pdo = new PDO($config['host'], $config['user'], $config['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $config['charset']));
//             $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
//             exit($e->getMessage());
//         }
//     }

//     //新增
//     protected function add($_tables, Array $_addData)
//     {
//         $_addFields = array();
//         $_addValues = array();
//         foreach ($_addData as $_key => $_value) {
//             $_addFields[] = $_key;
//             $_addValues[] = $_value;
//         }
//         $_addFields = implode(',', $_addFields);
//         $_addValues = implode("','", $_addValues);
//         $_sql = "INSERT INTO $_tables[0] ($_addFields) VALUES ('$_addValues')";
//         return $this->execute($_sql)->rowCount();
//     }

//     //修改
//     protected function update($_tables, Array $_param, Array $_updateData)
//     {
//         $_where = $_setData = '';
//         foreach ($_param as $_key => $_value) {
//             $_where .= $_value . ' AND ';
//         }
//         $_where = 'WHERE ' . substr($_where, 0, -4);
//         foreach ($_updateData as $_key => $_value) {
//             if (Validate::isArray($_value)) {
//                 $_setData .= "$_key=$_value[0],";
//             } else {
//                 $_setData .= "$_key='$_value',";
//             }
//         }
//         $_setData = substr($_setData, 0, -1);
//         $_sql = "UPDATE $_tables[0] SET $_setData $_where";
//         return $this->execute($_sql)->rowCount();
//     }

//     //验证一条数据
//     protected function isOne($_tables, Array $_param)
//     {
//         $_where = '';
//         foreach ($_param as $_key => $_value) {
//             $_where .= $_value . ' AND ';
//         }
//         $_where = 'WHERE ' . substr($_where, 0, -4);
//         $_sql = "SELECT id FROM $_tables[0] $_where LIMIT 1";
//         return $this->execute($_sql)->rowCount();
//     }

//     //删除
//     protected function delete($_tables, Array $_param)
//     {
//         $_where = '';
//         foreach ($_param as $_key => $_value) {
//             $_where .= $_value . ' AND ';
//         }
//         $_where = 'WHERE ' . substr($_where, 0, -4);
//         $_sql = "DELETE FROM $_tables[0] $_where LIMIT 1";
//         return $this->execute($_sql)->rowCount();
//     }

//     //查询
//     protected function select($_tables, Array $_fileld, Array $_param = array())
//     {
//         $_limit = $_order = $_where = $_like = '';
//         if (Validate::isArray($_param) && !Validate::isNullArray($_param)) {
//             $_limit = isset($_param['limit']) ? 'LIMIT ' . $_param['limit'] : '';
//             $_order = isset($_param['order']) ? 'ORDER BY ' . $_param['order'] : '';
//             if (isset($_param['where'])) {
//                 foreach ($_param['where'] as $_key => $_value) {
//                     $_where .= $_value . ' AND ';
//                 }
//                 $_where = 'WHERE ' . substr($_where, 0, -4);
//             }
//             if (isset($_param['like'])) {
//                 foreach ($_param['like'] as $_key => $_value) {
//                     $_like = "WHERE $_key LIKE '%$_value%'";
//                 }
//             }
//         }
//         $_selectFields = implode(',', $_fileld);
//         $_table = isset($_tables[1]) ? $_tables[0] . ',' . $_tables[1] : $_tables[0];
//         $_sql = "SELECT $_selectFields FROM $_table $_where $_like $_order $_limit";
//         $_stmt = $this->execute($_sql);
//         $_result = array();
//         while (!!$_objs = $_stmt->fetchObject()) {
//             $_result[] = $_objs;
//         }
//         return Tool::setHtmlString($_result);
//     }

//     //总记录
//     protected function total($_tables, Array $_param = array())
//     {
//         $_where = '';
//         if (isset($_param['where'])) {
//             foreach ($_param['where'] as $_key => $_value) {
//                 $_where .= $_value . ' AND ';
//             }
//             $_where = 'WHERE ' . substr($_where, 0, -4);
//         }
//         $_sql = "SELECT COUNT(*) as count FROM $_tables[0] $_where";
//         $_stmt = $this->execute($_sql);
//         return $_stmt->fetchObject()->count;
//     }

//     //得到下一个ID
//     protected function nextId($_tables)
//     {
//         $_sql = "SHOW TABLE STATUS LIKE '$_tables[0]'";
//         $_stmt = $this->execute($_sql);
//         return $_stmt->fetchObject()->Auto_increment;
//     }


//     //执行SQL
//     private function execute($_sql)
//     {
//         try {
//             $_stmt = $this->_pdo->prepare($_sql);
//             $_stmt->execute();
//         } catch (PDOException  $e) {
//             exit('SQL语句：' . $_sql . '<br />错误信息：' . $e->getMessage());
//         }
//         return $_stmt;
//     }
// }
//class Mysql{
//    private static $ins = null;
//    private $conn = null;
//
//    protected function __construct($config){
//        $this->connect($config['host'],$config['user'],$config['pass']);
//        $this->selectDb($config['name']);
//        $this->setCharset($config['charset']);
//    }
//    //单例
//    public static function getIns($config){
//        if(!self::$ins instanceof self){
//            self::$ins = new self($config);
//        }
//        return self::$ins;
//    }
//    /**连接数据库
//     * @param $host
//     * @param $user
//     * @param $pass
//     */
//    public function connect($host,$user,$pass){
//        $this->conn = mysql_connect($host,$user,$pass);
//        if(!$this->conn){
//            die('连接数据库服务器失败');
//        }
//    }
//    /**选择数据
//     * @param $name
//     */
//    public function selectDb($name){
//        mysql_select_db($name) or die('选择数据库失败');
//    }
//    /**设置字符集
//     * @param $charset
//     */
//    public function setCharset($charset){
//        mysql_query('set names '.$charset) or die('设置字符集失败');
//    }
//
//
//    /**添加
//     * @param $tbl
//     * @param $arr
//     * @return int
//     */
//    public function insert($tbl,$arr){
//        $k = implode(",",array_keys($arr));
//        $v = "'".implode("','",array_values($arr))."'";
//        $sql = "INSERT INTO {$tbl}({$k}) VALUES ({$v})";
//        $this->query($sql);
//        return $this->getInsertId();
//    }
//
//    /**删除
//     * @param $tbl
//     * @param $where
//     * @return int
//     */
//    public function delete($tbl,$where){
//        $sql = "DELETE FROM {$tbl} WHERE {$where}";
//        $this->query($sql);
//        return $this->getAffectedRows();
//    }
//    /**执行sql并记录日志
//     * @param $sql
//     * @return resource
//     */
//    public function query($sql){
//        Log::write($sql);
//        $rs = mysql_query($sql,$this->conn);
//        return $rs;
//    }
//    /**
//     * 更新
//     * @see db::update()
//     * @return int/bool
//     */
//    public function update($table,$array,$where = null){
//        $str = null;
//        foreach ($array as $k=>$v){
//            if($str == null){
//                $sep = '';
//            }else{
//                $sep = ',';
//            }
//            $str .= $sep.$k."='".$v."'";
//        }
//        $sql = "update {$table} set {$str} where ".($where == null?null:$where);
//        $rs = $this->query($sql,$this->conn);
//        if($rs){
//            return $this->getAffectedRows();
//        }else{
//            return false;
//        }
//    }
//
//    /**
//     * 获得全部
//     * @see db::getAll()
//     * @return array
//     */
//    public function getAll($sql){
//        $rs = $this->query($sql);
//        $rows = array();
//
//        while (@$row = mysql_fetch_assoc($rs)){
//            $rows[] = $row;
//        }
//        return $rows;
//    }
//    /**
//     * 获得一条
//     * @see db::getRow()
//     * @return array
//     */
//    public function getRow($sql){
//        $rs = $this->query($sql);
//        return mysql_fetch_assoc($rs);
//    }
//    /**
//     * 获得一个
//     * @see db::getOne()
//     * @return string
//     */
//    public function getOne($sql){
//        $rs = $this->query($sql);
//        $row = mysql_fetch_row($rs);
//        return $row[0];
//    }
//
//
//    /**取得上一步 INSERT 操作产生的 ID
//     * @return int
//     */
//    public function getInsertId(){
//        return mysql_insert_id($this->conn);
//    }
//
//    /**取得前一次 MySQL 操作所影响的记录行数
//     * @return int
//     */
//    public function getAffectedRows(){
//        return mysql_affected_rows($this->conn);
//    }
//
//
//}
//
//class Mysql{
//
//	/**
//	 * 报错函数
//	 *
//	 * @param string $error
//	 */
//	Function err($error){
//		die("对不起，您的操作有误，错误原因为：".$error);//die有两种作用 输出 和 终止   相当于  echo 和 exit 的组合
//	}
//
//	/**
//	 * 连接数据库
//	 *
//	 * @param string $dbhost 主机名
//	 * @param string $dbuser 用户名
//	 * @param string $dbpsw  密码
//	 * @param string $dbname 数据库名
//	 * @param string $dbcharset 字符集/编码
//	 * @return bool  连接成功或不成功
//	 **/
//	Function connect($config){
//		extract($config);
//		if(!($con = mysql_connect('localhost','root',''))){//mysql_connect连接数据库函数
//			$this->err(mysql_error());
//		}
//		if(!mysql_select_db('frame',$con)){//mysql_select_db选择库的函数
//			$this->err(mysql_error());
//		}
//		mysql_query("set names ".'utf8');//使用mysql_query 设置编码  格式：mysql_query("set names utf8")
//	}
//	/**
//	 * 执行sql语句
//	 *
//	 * @param string $sql
//	 * @return bool 返回执行成功、资源或执行失败
//	 */
//	Function query($sql){
//		if(!($query = mysql_query($sql))){//使用mysql_query函数执行sql语句
//			$this->err($sql."<br />".mysql_error());//mysql_error 报错
//		}else{
//			return $query;
//		}
//	}
//
//	/**
//	*列表
//	*
//	*@param source $query sql语句通过mysql_query 执行出来的资源
//	*@return array   返回列表数组
//	**/
//	Function findAll($query){
//		while($rs=mysql_fetch_array($query, MYSQL_ASSOC)){//mysql_fetch_array函数把资源转换为数组，一次转换出一行出来
//			$list[]=$rs;
//		}
//		return isset($list)?$list:"";
//	}
//
//	/**
//	*单条
//	*
//	*@param source $query sql语句通过mysql_query执行出的来的资源
//	*return array   返回单条信息数组
//	**/
//	Function findOne($query){
//		$rs = mysql_fetch_array($query, MYSQL_ASSOC);
//		return $rs;
//	}
//
//	/**
//	*指定行的指定字段的值
//	*
//	*@param source $query sql语句通过mysql_query执行出的来的资源
//	*return array   返回指定行的指定字段的值
//	**/
//	Function findResult($query, $row = 0, $filed = 0){
//		$rs = mysql_result($query,  $row, $filed);
//		return $rs;
//	}
//
//	/**
//	 * 添加函数
//	 *
//	 * @param string $table 表名
//	 * @param array $arr 添加数组（包含字段和值的一维数组）
//	 *
//	 */
//	Function insert($table,$arr){
//		//$sql = "insert into 表名(多个字段) values(多个值)";
//		foreach($arr as $key=>$value){//foreach循环数组
//			$value = mysql_real_escape_string($value);
//			$keyArr[] = "`".$key."`";//把$arr数组当中的键名保存到$keyArr数组当中
//			$valueArr[] = "'".$value."'";//把$arr数组当中的键值保存到$valueArr当中，因为值多为字符串，而sql语句里面insert当中如果值是字符串的话要加单引号，所以这个地方要加上单引号
//		}
//		$keys = implode(",",$keyArr);//implode函数是把数组组合成字符串 implode(分隔符，数组)
//		$values = implode(",",$valueArr);
//		$sql = "insert into ".$table."(".$keys.") values(".$values.")";//sql的插入语句  格式：insert into 表(多个字段)values(多个值)
//		$this->query($sql);//调用类自身的query(执行)方法执行这条sql语句  注：$this指代自身
//		return mysql_insert_id();
//	}
//
//	/**
//	*修改函数
//	*
//	*@param string $table 表名
//	*@param array $arr 修改数组（包含字段和值的一维数组）
//	*@param string $where  条件
//	**/
//	Function update($table,$arr,$where){
//		//update 表名 set 字段=字段值 where ……
//		foreach($arr as $key=>$value){
//			$value = mysql_real_escape_string($value);
//			$keyAndvalueArr[] = "`".$key."`='".$value."'";
//		}
//		$keyAndvalues = implode(",",$keyAndvalueArr);
//		$sql = "update ".$table." set ".$keyAndvalues." where ".$where;//修改操作 格式 update 表名 set 字段=值 where 条件
//		$this->query($sql);
//	}
//
//	/**
//	*删除函数
//	*
//	*@param string $table 表名
//	*@param string $where 条件
//	**/
//	Function del($table,$where){
//		$sql = "delete from ".$table." where ".$where;//删除sql语句 格式：delete from 表名 where 条件
//		$this->query($sql);
//	}
//
//}
