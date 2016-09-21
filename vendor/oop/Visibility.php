<?php

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 2:29 PM
 */
class Visibility
{
    private $name    = "Valon Hajredini";
    public $age     = 28;
    public function hauseName(){
        return $this->name;
}

    public function hello(){
        echo 'Hello world';
    }
}
class Dor extends Visibility{
    public function name(){
//        return $this->name;
    }
}