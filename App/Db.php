<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2017
 * Time: 20:59
 */

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $dns = 'mysql:host=localhost;dbname=php2';
        $user ='root';
        $pass = '';
        $this->dbh = new \PDO($dns, $user, $pass);
    }

    public function query($sql, $date = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($date);
        if(false === $res){
            die('Error in '.$sql);
        }

        if(null == $class){
            return $sth->fetchAll();
        }else{
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

    }

    public function execute($query, $params=[]){
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);

    }

   }