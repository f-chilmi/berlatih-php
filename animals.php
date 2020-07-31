<?php

class Animal 
{
  // public $name = "shaun";
  public $legs = 2;
  public $cold_blooded = "false"; 

  public function set_name($name){
    $this -> name = $name;
  }

  public function get_name(){
    return $this -> name;
  }

  public function set_legs($legs){
    $this -> legs = $legs;
  }

  public function get_legs(){
    return $this -> legs;
  }
}

$hewan = new Animal();
$hewan->set_name("shaun"); // "shaun"
$hewan->set_legs(4);

// echo "Hewan bernama ". $hewan->get_name() . " memiliki kaki berjumlah " . $hewan->get_legs();
// echo $sheep->legs; // 2
// echo $sheep->cold_blooded // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>