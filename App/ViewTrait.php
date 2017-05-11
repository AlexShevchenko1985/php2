<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.05.2017
 * Time: 21:15
 */

namespace App;


trait ViewTrait
{
    public $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __isset($name)
    {
        return $this->data[$name];
    }
}