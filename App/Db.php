<?php

namespace App;

class Db
extends Config
{
    protected $dbh;

    protected function __construct()
    {
        $config = Config::instance();
        $this->dbh = new \PDO($config->data['db']['dns'], $config->data['db']['user'], $config->data['db']['pass']);

    }

    public function query($sql, $date = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($date);
        if (false === $res) {
            die('Error in ' . $sql);
        }

        if (null == $class) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

    }

    public function execute($query, $params = [])
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);

    }

}