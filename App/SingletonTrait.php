<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.05.2017
 * Time: 20:50
 */

namespace App;

trait SingletonTrait
{
    protected static $instance;
    public $data;

    protected function __construct()
    {

    }

    public static function instance()
    {

        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

}