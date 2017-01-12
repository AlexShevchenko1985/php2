<?php

namespace App;

abstract class Model
{

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, [], static::class);
    }

    public static function countAll()
    {
        $db = new Db();
        $sql = 'SELECT COUNT(*) AS num FROM ' . static::$table;
        return (int)$db->query($sql, [], static::class)[0]->num;
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table. ' WHERE id = :id';

        $res = $db->query($sql, [':id' => $id], static::class);

        if(!empty($res)){

            return $res;

        }else{
            return var_dump(false);
        }

    }

    public static function lastNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table .' ORDER BY id DESC LIMIT  3 ';
        return $db->query($sql, [], static::class);
    }



}