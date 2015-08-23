<?php
class Db{
    public static $db;

    public static function init($dbType,$config){
        self::$db = $dbType::getInstance();
        self::$db->pdoConnect($config);

    }
    public static function insert($tbl,$arr){
        return self::$db->insert($tbl,$arr);
    }
    public static function update($tbl,$arr,$where){
        return self::$db->update($tbl,$arr,$where);
    }
    public static function delete($tbl,$where){
        return self::$db->delete($tbl,$where);
    }
    public static function select($table, $fields, $where, $orderBy, $sort, $limit){
        return self::$db->select($table, $fields, $where, $orderBy, $sort, $limit);
    }
    public static function fetchOne(){
        return self::$db->fetchOne();
    }
    public static function fetchAll(){
        return self::$db->fetchAll();
    }
    public static function getCount(){
        return self::$db->getCount();
    }
}


//class Db{
//
//	public static $db;
//
//	public static function init($dbtype, $config) {
//		self::$db = $dbtype::getIns($config);
//	}
//
//	/*public static function query($sql){
//		return self::$db->query($sql);
//	}
//
//	public static function findAll($sql){
//		$query = self::$db->query($sql);
//		return self::$db->findAll($query);
//	}
//
//	public static function findOne($sql){
//		$query = self::$db->query($sql);
//		return self::$db->findOne($query);
//	}
//
//	public static function findResult($sql, $row = 0, $filed = 0){
//		$query = self::$db->query($sql);
//		return self::$db->findResult($query, $row, $filed);
//	}
//
//	public static function insert($table,$arr){
//		return self::$db->insert($table,$arr);
//	}
//
//	public static function update($table, $arr, $where){
//		return self::$db->update($table, $arr, $where);
//	}
//
//	public static function del($table,$where){
//		return self::$db->del($table,$where);
//	}*/
//
//}
