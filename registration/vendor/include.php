<?php

function __autoload($class){
    include 'libs/'.$class.'.php';
}