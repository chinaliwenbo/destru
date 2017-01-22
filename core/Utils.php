<?php
namespace Core;

class Utils
{
    private static $EXT = '.pid';
    private static $MSG = "process start\n";

    private static function logFile($pid){
        $logDir = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'log' . DIRECTORY_SEPARATOR; //日志文件位置
        if(is_dir($logDir)){
            mkdir($logDir, 664);
        }
        $fileName = $logDir . $pid . self::$EXT;
        return $fileName;
    }
    
    /**
     * 写文件
     * @param type $pid
     */
    public static function wirteLog($pid, $msg = ''){
        $msg = empty($msg) ? self::$MSG : $msg;
        file_put_contents(self::logFile($pid), $msg);
    }

    /**
     * 删除文件
     * @param type $pid
     */
    public static function deletePidLog($pid){
        $log = self::logFile($pid);
        unset($log);
    }
}