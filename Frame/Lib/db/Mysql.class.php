<?php
/**
 * 数据库操作类
 */
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
            $this->Msg("执行sql出错信息:" . $e->getMessage() . "<br>sql:(" . $sql . ")");
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
        log::write($sql);
        try {
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