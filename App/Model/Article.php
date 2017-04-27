<?php

namespace App\Model;

use App\Db;
use App\Model;

class Article extends Model
{
    public $id;
    public $title;
    public $text;

    public static $table = 'news';

}