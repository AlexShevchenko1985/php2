<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $text;

    public static function getLatest($limit = 3)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT '.$limit;
        return $db->query($sql, [], static::class);
    }

}