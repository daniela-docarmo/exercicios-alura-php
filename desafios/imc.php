<?php

class IMC{

     public function calcularIMC($peso, $altura)
     {
        $imc = $peso /($altura * $altura);

         echo "Seu IMC é " . number_format((float)$imc, 2, '.', ''). " Kg/m2" . PHP_EOL;
           
     }
}

$imcPessoa1 = new IMC();
$imcPessoa1->calcularIMC(52, 1.56);

