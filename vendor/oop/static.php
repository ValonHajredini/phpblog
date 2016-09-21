<?php

class door{
    public static $name = "Valon Hajredini";
    public static function fullname(){
        echo  self::$name = '<br>Hello world';
    }
}

class window extends door{
    public static function newName(){
        echo parent::$name = 'Valon H';
    }
}