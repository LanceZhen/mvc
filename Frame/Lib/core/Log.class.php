<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/21 0021
 * Time: 下午 10:01
 */
/**记录日志类
 * Class Log
 */
class Log{
    const LOGFILE = 'log.txt';
    const SIZE = 1;//超过备份文件

    /**写入日志
     * @param $cont
     */
    public static function write($cont){
        $cont =date('Y/m/d H:i:s')."\t\t".$cont."\r\n";
        $log = self::isBackup();
        $fh = fopen($log,'ab');
        fwrite($fh,$cont);
        fclose($fh);
    }

    /**是否备份
     * @return string
     */
    public static function isBackup(){
        $logDir = ROOT.'data/log/';
        if(!is_dir($logDir)){
            mkdir($logDir);
        }
        $log = $logDir.self::LOGFILE;
        if(!file_exists($log)){
            touch($log);
            return $log;
        }
        clearstatcache($log);
        $size = filesize($log);
        if($size > self::SIZE*1048576){
            $flag = rename($log,$logDir.date('YmdH').generateRandomString(4).'.backup');
            if($flag){
                touch($log);
                return $log;
            }else{
                return $log;
            }
        }else{
            return $log;
        }
    }
}