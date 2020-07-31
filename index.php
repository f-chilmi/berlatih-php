<?php

// require 'animals.php';
require 'frog.php';
require 'ape.php';

$kodok = new Frog("buduk");
$kodok->set_jump("hop hop") ;

// echo "Hewan bernama ". $hewan->get_name() . " memiliki kaki berjumlah " . $hewan->get_legs();
echo "<br>";
echo "kodok bernama ". $kodok->get_name() . "memiliki suara ". $kodok->jump();
echo "<br>";
echo "seekor kera bernama ". $sungokong -> get_name() . "suka berteriak " . $sungokong -> yell();



?>