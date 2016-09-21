<?php
//include 'autoload/dog.php';
//include 'autoload/cat.php';
//include 'autoload/camel.php';

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 7:58 PM
 */

function __autoload($class){
    include 'autoload/'.$class.'.php';
}
class autoLoad{

}