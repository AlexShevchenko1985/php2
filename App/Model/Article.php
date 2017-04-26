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

    public static function getLastNews($limit = 1){
        $db = new Db();
        $sql = 'SELECT * FROM '.self::$table.' ORDER BY id DESC LIMIT '.$limit;
        return $db->query($sql, [], self::class);
    }

}