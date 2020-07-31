<?php

require 'animals.php';

class Ape extends Animal{

    function __construct($name){
        $this -> name = $name;
    }
    function get_name (){
        return $this-> name;
    }
    function set_yell($yelling){
        $this -> yelling = $yelling;
    }
    function yell(){
        return $this -> yelling;
    }

}

$sungokong = new Ape("kera sakti");
$sungokong->set_yell("Auoooooo"); // "Auooo"
// echo $sungokong -> get_name();
// echo $sungokong -> yell();



?>