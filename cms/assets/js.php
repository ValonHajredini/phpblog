<?php
foreach (scandir(dirname(__FILE__).'/js/') as $filename) {
$except = array( "js");
$imp = implode('|', $except);
if (preg_match('/^.*\.(' . $imp . ')$/i', $filename)) {
$file = '<script src="assets/js/' . $filename.'" type="text/javascript"></script>';
echo $file;
//        echo $file;
//        echo '<br>';
}
}