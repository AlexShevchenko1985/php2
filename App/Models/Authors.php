<?php

namespace App\Models;

use App\Model;

class Authors extends Model
{
    public $id;
    public $firstname;
    public $lastname;

    public static $table = 'authors';

}