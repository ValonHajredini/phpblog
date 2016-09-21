<?php
foreach (scandir(dirname(__FILE__).'/oop/') as $filename) {
    $except = array("inc", "php");
    $imp = implode('|', $except);
    if (preg_match('/^.*\.(' . $imp . ')$/i', $filename)) {
        $file = '/oop/' . $filename;
        include $file;
//        echo $file;
//        echo '<br>';
    }
}