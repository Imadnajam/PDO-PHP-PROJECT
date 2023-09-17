<?php

class Compte{
     protected  int $montant ;
     protected int $intéret;
     public function __construct($montant,$intéret){
       $this->montant = $montant;
       $this->intéret = $intéret;

    }
    function get_montant(){
    return $this->montant;
    }
     function un_an()
    {
        return $this->montant *$this->intéret/100;
    }




}
$a=new Compte(200,20);
$b=new Compte(1000,2);
echo $a->get_montant(). "<br>";
echo $a->un_an() . "<br><br>";
echo $b->get_montant() . "<br>";
echo $b->un_an();
?>