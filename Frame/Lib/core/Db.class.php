<?php
/**数据库类
 * Class DB
 */
class DB{
    public static $db;

    /**初始化数据库
     * @param $dbType
     * @param $config
     */
    public static function init($dbType,$config){
        self::$db = $dbType::getInstance();
        self::$db->pdoConnect($config);
    }

    /**插入
     * @param $tbl
     * @param $arr
     * @return mixed
     */
    public static function insert($tbl,$arr){
        return self::$db->insert($tbl,$arr);
    }

    /**更新
     * @param $tbl
     * @param $arr
     * @param $where
     * @return mixed
     */
    public static function update($tbl,$arr,$where){
        return self::$db->update($tbl,$arr,$where);
    }

    /**删除
     * @param $tbl
     * @param $where
     * @return mixed
     */
    public static function delete($tbl,$where){
        return self::$db->delete($tbl,$where);
    }

    /**执行sql
     * @param $sql
     * @return mixed
     */
    public static function sqlExec($sql){
        return self::$db->sqlExec($sql);
    }
    /**查询
     * @param $table
     * @param $fields
     * @param $where
     * @param $orderBy
     * @param $sort
     * @param $limit
     * @return mixed
     */
    public static function select($table, $fields = "*", $where, $orderBy = "", $sort = "", $limit = ""){
        return self::$db->select($table, $fields, $where, $orderBy, $sort, $limit);
    }

    /**获取一条记录
     * @return mixed
     */
    public static function fetchOne(){
        return self::$db->fetchOne();
    }

    /**获取全部记录
     * @return mixed
     */
    public static function fetchAll(){
        return self::$db->fetchAll();
    }

    /**获得记录条数
     * @return mixed
     */
    public static function getCount(){
        return self::$db->getCount();
    }

    public static function getVersion(){
        return self::$db->getVersion();
    }
    public static function getDBSize($dbName,$tblPrefix){
        return self::$db->getDBSize($dbName,$tblPrefix);
    }

//    public static function __callStatic($name, $arguments = null)
//    {
//        return self::$Db->$name($arguments == null ?:implode(',',$arguments));
//        // 注意: $name 的值区分大小写
////        echo "Calling static method '$name' "
////            . implode(', ', $arguments). "\n";
//    }
}


//class Db{
//
//	public static $Db;
//
//	public static function init($dbtype, $config) {
//		self::$Db = $dbtype::getIns($config);
//	}
//
//	/*public static function query($sql){
//		return self::$Db->query($sql);
//	}
//
//	public static function findAll($sql){
//		$query = self::$Db->query($sql);
//		return self::$Db->findAll($query);
//	}
//
//	public static function findOne($sql){
//		$query = self::$Db->query($sql);
//		return self::$Db->findOne($query);
//	}
//
//	public static function findResult($sql, $row = 0, $filed = 0){
//		$query = self::$Db->query($sql);
//		return self::$Db->findResult($query, $row, $filed);
//	}
//
//	public static function insert($table,$arr){
//		return self::$Db->insert($table,$arr);
//	}
//
//	public static function update($table, $arr, $where){
//		return self::$Db->update($table, $arr, $where);
//	}
//
//	public static function del($table,$where){
//		return self::$Db->del($table,$where);
//	}*/
//
//}
