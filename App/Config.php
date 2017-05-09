<?php

namespace App;

abstract class Config
{
    protected static $instance;

    protected function __construct()
    {

    }

    public static function instance()
    {

        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

}