<?php

namespace App\Model;

use App\Model;

class Authors extends Model
{
    public $id;
    public $firstname;
    public $lastname;

    public static $table = 'authors';

}