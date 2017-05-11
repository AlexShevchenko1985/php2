<?php

namespace App\Models;

use App\Model;

class Authors extends Model
{
    public $id;
    public $firstname;
    public $lastname;

    /**
     * @var string Table name
     */
    public static $table = 'authors';

}