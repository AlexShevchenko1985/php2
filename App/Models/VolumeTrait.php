<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 07.05.2017
 * Time: 22:58
 */

namespace App\Models;


trait VolumeTrait
{

    public $x = 1;
    public $y = 2;
    public $z = 2;


    public function getVolume()
    {
        return $this->x + $this->y + $this->z;
    }

}