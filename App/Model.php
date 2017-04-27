<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2017
 * Time: 21:38
 */

namespace App;


abstract class Model
{

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM '.static::$table;
        return $db->query($sql, [], static::class);
    }

    public static function countAll()
    {
        $db = new Db();
        $sql = 'SELECT count(*) AS num FROM '.static::$table;
        return (int)$db->query($sql, [], static::class)[0]->num;
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM '.static::$table.' WHERE id = :id';
        return  $db->query($sql, ['id' => $id], static::class)[0];
    }

    public static function getLastItem($limit = 1){
        $db = new Db();
        $sql = 'SELECT * FROM '.static::$table.' ORDER BY id DESC LIMIT '.$limit;
        return $db->query($sql, [], static::class);
    }

}