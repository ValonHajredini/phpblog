<?php
include_once 'vendor/includes.inc';
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/21/2016
 * Time: 2:02 PM
 */
class Index{

}
$dog    = new Dog();
$cat    = new Cat();
$camel  = new Camel();
echo $dog->name . ' price: '. $dog->price . '<br>';
echo $cat->name . ' price: '. $cat->price . '<br>';
echo $camel->name . ' price: '. $camel->price . '<br>';

//$wali = new magicFunctiones();
//$wali->hello();
//class players extends Cauntries{
//    public $player1 = "Valon Hjredini";
//    public $player2 = "Endrit Gojani";
//    public $player3 = "Ilir Gojani";
//    public $player4 = "Fitim Gashi";
//
//    public function player(){
//        return $this->player1. " Is from ". $this->al;
//    }
//}
//$player = new players();
//echo $player->player();
//$new = new This();
//echo $new->fullname();
//$h = new House();

//echo $h->name;
//echo '<br>';
//echo $h->age;
//echo '<br>';
//echo $h->hello();


//$h = new Visibility();
//echo $h->name;
//$dor = new Dor();
//echo $dor->name();
//$hause = new Visibility();
//echo $hause->hauseName();
// Static Values
//echo door::$name;
//door::fullname();
//window::newName();
// Constant variable on e class
//echo constantClass::name;
//echo namee;