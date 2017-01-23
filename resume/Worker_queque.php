<?php
declare(ticks = 1);
#自动加载类
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'autoload.php';

//向消息队列中写入信息
$queue = new Core\Queue\LinuxMessage();
echo $queue->put(1111)."\n";
echo $queue->get()."\n";
