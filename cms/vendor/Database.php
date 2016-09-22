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
    public  function  select($query){
        $result = $this->link->query($query);
        if ($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function insert($query){
        $insert = $this->link->query($query);
        if ($insert){
            header('Location: index.php?insert=Post inserted');
        } else{
          echo "Post did not insert";
        }
    }
    public function update($query){
        $update = $this->link->query($query);
        if ($update){
            header('Location: index.php?update=Post Updated');
        } else{
            echo "Post did not Updated";
        }
    }
    public function delete($query){
        $delete = $this->link->query($query);
        if ($delete){
            header('Location: index.php?delete=Post deleted');
        } else{
            echo "Post did not Deleted";
        }
    }
}