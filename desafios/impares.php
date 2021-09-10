<?php

//Exibir os números ímpares até 100.

class ExibirImpares{

public function exibir() {

    for($i = 1; $i <= 100; $i++){

        if($i % 2 === 0){
            continue;
        } 
    
         echo $i . PHP_EOL;
    
    }

  }

}

$numeros = new ExibirImpares();
$numeros->exibir();
