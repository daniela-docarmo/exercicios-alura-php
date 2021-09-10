<?php

//Exibir a tabuada de determinado número.

class Tabuada {

    public function efetuarCalculos($numero){

     for($i = 0; $i <= 9; $i++){

         echo  $numero * $i . PHP_EOL;
     }

    }

}

$tab = new Tabuada();
$tab->efetuarCalculos(10);

