<?php
declare(ticks = 1);
#自动加载类
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'autoload.php';

/* 
 * 1、邮件简历拉取代码
 * 2、默认启动四个进程进行邮件简历拉取，由主进程进程任务负载均衡分配
 * 3、进程间通过linux系统级别的消息队列进行通信
 */

//信息拉取代码

//启动多个进程进行消息处理
class Worker implements \Core\Runnable {
    /**
     * todo
     * @return void
     */
    public function run()
    {
        while(true){
            echo getmypid(). "sub process" .PHP_EOL;
            sleep(3);
        }
    }
}

$pool = \Core\PoolFactory::newParallelPool(new Worker(), 4);#进程池中注册四个worker进程

//事件模型代码
while(true){
    $pool->keep(); 
}

/**
 * 父进程在消息队列中插入数据
 */
function masterRun(){
    
}


function workerRun(){
    
}