<?php
namespace Core\Queue;

interface QueueInterface
{
    /**
     * 写入
     *
     * @param $value
     * @return bool
     */
    public function put($value);
    
    /**
     * 获取
     *
     * @param bool $block if block when the queue is empty
     * @return bool|string
     */
    public function get($block = false);
}