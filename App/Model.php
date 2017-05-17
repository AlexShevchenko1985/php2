<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2017
 * Time: 21:38
 */

namespace App;



use App\Models\Authors;

abstract class Model
{

    use ViewTrait;

    /**
     * return mixed
     */
    public static function findAll()
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, [], static::class);
    }

    /**
     * return int
     */
    public static function countAll()
    {
        $db = Db::instance();
        $sql = 'SELECT count(*) AS num FROM ' . static::$table;
        return (int)$db->query($sql, [], static::class)[0]->num;
    }

    /**
     * @param int $id
     * return mixed
     */
    public static function findById($id)
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id';
        $query = $db->query($sql, ['id' => $id], static::class);
        if (false !== $query) {
            return $query[0];
        }
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public static function getLastItem($limit = 1)
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $limit;
        return $db->query($sql, [], static::class);
    }

    /**
     * @return mixed
     */
    public function isNew()
    {
        return null === $this->data['id'];
    }

    /**
     * @return bool
     */
    public function update()
    {

        if ($this->isNew()) {
            return false;
        }

        $sets = [];
        $data = [];


        foreach ($this->data as $key => $value) {
            $data[':' . $key] = $value;
            if ('id' == $key) {
                continue;
            }

            $sets[] = $key . ' = :' . $key;
        }
        $db = Db::instance();
        $sql = 'UPDATE ' . static::$table . '
               SET ' . implode(',', $sets) . '
               WHERE id = :id';

        return $db->execute($sql, $data);

    }

    /**
     * @return bool
     */
    public function insert()
    {

        if (!$this->isNew()) {
            return false;
        }

        $column = [];
        $sets = [];
        $data = [];

        foreach ($this->data as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $data[':' . $key] = $value;
            $column[] = $key;
            $sets[] = ':' . $key;
        }

        $db = Db::instance();
        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(',', $column) . ') 
                       VALUE (' . implode(',', $sets) . ')';
        return $db->execute($sql, $data);

    }

    /**
     * @return bool
     */
    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    /**
     * @return bool
     */
    public function delete()
    {
        if ($this->isNew()) {
            return false;
        }

        $db = Db::instance();
        $sql = 'DELETE FROM ' . static::$table .
            ' WHERE id = :id';
        return $db->execute($sql, [':id' => $this->data['id']]);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if ($name == 'author') {
            if (isset($this->author_id)) {
                $this->data[$name] = Authors::findById($this->author_id);
            }
        }
        return $this->data[$name];
    }

}