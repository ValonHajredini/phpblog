<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/22/2016
 * Time: 10:01 AM
 */
//$array = array('');
foreach (scandir(dirname(__FILE__).'/css/') as $filename) {
    $except = array( "css" ,'map');
    $imp = implode('|', $except);
    if (preg_match('/^.*\.(' . $imp . ')$/i', $filename)) {
//        echo '--------<br>';
//        echo $filename;
//
//        echo '<br>--------';
//        echo $array['epara'];
//        if ($array[0] != $filename){
            $file = '<link rel="stylesheet" href="assets/css/' . $filename . '">';
            echo $file;
//    }

//        echo $file;
//        echo '<br>';
    }
}



