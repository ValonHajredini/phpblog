<?php

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/22/2016
 * Time: 12:53 PM
 */
class Database{
    public function __construct(){
        $this->connect();
    }

    public $host        = DB_HOST;
    public $user        = DB_USER;
    public $password    = DB_PASSWORD;
    public $db_name     = DB_NAME;

    public $link;
    private function connect(){
        $this->link = new mysqli(
                                $this->host,
                                $this->user,
                                $this->password,
                                $this->db_name
                                );
    }
}