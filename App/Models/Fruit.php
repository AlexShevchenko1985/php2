<?php


namespace App\Models;


class Fruit
    implements CanOrderInterface, HasVolume
{
    use VolumeTrait;

    public function getPrice()
    {
       return 42;
    }

    public function getWeight()
    {
        return 0.200;
    }
}