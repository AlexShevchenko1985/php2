<?php

namespace App\Models;


class Vegetable
    implements CanOrderInterface
{

    public function getPrice()
    {
        return 13;
    }

    public function getWeight()
    {
        return 0.100;
    }

}