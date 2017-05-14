<?php

namespace App;

class Config
{
    protected static $instance;
    public $data;

    protected function __construct()
    {
        $this->data = include __DIR__.'/../ini.php';

    }

    public static function instance()
    {

        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

}