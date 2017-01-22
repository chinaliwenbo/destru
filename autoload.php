<?php
/*
 * 自动加载类
 */
spl_autoload_register(function ($classname) {

    $classArr = explode('\\', $classname);
    $className = end($classArr); //文件名称

    reset($classArr);
    unset($classArr[ count($classArr) - 1 ]);
    $path = implode(DIRECTORY_SEPARATOR, $classArr);//文件路径
    
    $ext = '.php';//文件扩展

    //文件全路径
    $file = dirname(__FILE__) . DIRECTORY_SEPARATOR.  strtolower($path) . DIRECTORY_SEPARATOR . $className .  $ext;
    
    if (file_exists($file)) {
        require $file;
    } else {
        trigger_error('can not find class ' . $file);
    }
});