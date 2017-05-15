<?php

namespace App;

class Config
{
  use SingletonTrait;

    protected function __construct($args)
    {
        $this->data = include $args;

    }

    public static function instance($args)
    {

        if (null === static::$instance) {
            static::$instance = new static($args);
        }
        return static::$instance;
    }

}