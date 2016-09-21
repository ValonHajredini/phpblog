<?php
foreach (scandir(dirname(__FILE__).'/vendor/oop/') as $filename) {
    $except = array("inc", "php");
    $imp = implode('|', $except);
    if (preg_match('/^.*\.(' . $imp . ')$/i', $filename)) {
        $file = '/vendor/oop/' . $filename;
        include $file;
        echo $file;
        echo '<br>';
    }
}
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 2:02 PM
 */
class Index{

}
$h = new House();

echo $h->name;
