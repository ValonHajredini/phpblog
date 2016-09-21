<?php

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 9:10 PM
 */
class Connect
{
    public $host        = 'localhost';
    public $user        = 'root';
    public $password    = 'password';
    public $db_name     = 'oop_db';
    public $link;
    public function __construct(){
        $this->connect();
    }

    private function connect(){
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db_name);

    }
}