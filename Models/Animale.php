<?php

class Animale {
    protected $famiglia;
    protected $gender;
    protected $alimentazione;
    protected $tegumento;
    protected $abitat;

    function __construct( String $famiglia,String $gender,String $alimentazione,String $tegumento,String $abitat){
        $this->famiglia = $famiglia;
        $this->gender = $gender;
        $this->alimentazione = $alimentazione;
        $this->tegumento = $tegumento;
        $this->abitat = $abitat;
    }

    public function parla(){
        return "vocalizza";
    }

    public function getFamiglia(){
        return $this->famiglia;
      
    }


}