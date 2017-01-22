<?php
namespace Core;


interface Runnable
{
    /**
     * process entry
     *
     * @return mixed
     */
    public function run();
}