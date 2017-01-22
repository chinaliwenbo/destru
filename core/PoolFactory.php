<?php
namespace Core;


class PoolFactory
{
    public static function newParallelPool($callback, $max = 4)
    {
        return new ParallelPool($callback, $max);
    }

}