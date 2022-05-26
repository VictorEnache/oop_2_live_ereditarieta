<?php

class Leone extends Animale{

   protected $tattiche;

    function __construct(String $famiglia,String $gender,String $alimentazione,String $tegumento,String $abitat, Array $tattiche){
        parent::__construct( $famiglia,  $gender,  $alimentazione,  $tegumento,  $abitat);

        $this->tattiche = $tattiche;
    }

    public function parla(){
        return "roooooar";
    }

    public function getTattiche(){
        return $this->tattiche;
      
    }

}

