<?php

require 'animals.php';



class Frog extends Animal {
    public function __construct ($name){
        $this -> name = $name;
    }
    function get_name (){
        return $this -> name;
    }
    function set_jump($suara){
        $this-> suara = $suara;
    }
    function jump(){
        return $this -> suara;
    }
}

$kodok = new Frog("buduk");
$kodok->set_jump("hop hop") ; // "hop hop"
// echo $kodok->get_name();
// echo $kodok->jump();

?>