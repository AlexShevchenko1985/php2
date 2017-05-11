<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    public $id;
    public $title;
    public $text;
    public $author_id;

    /**
     * @var string Table name
     */
    public static $table = 'news';

}