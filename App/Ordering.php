<?php

namespace App;


use App\Models\CanOrderInterface;

class Ordering
{
    public function oder(CanOrderInterface $item)
    {
        echo 'Цена товара: '.$item->getPrice();
    }

}