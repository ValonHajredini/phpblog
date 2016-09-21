<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 7:53 PM
 */
class magicFunctiones{
    public function hello(){
        echo 'Hello Wali';
    }
    public function __construct(){
    return $this->hello();
    }
}
