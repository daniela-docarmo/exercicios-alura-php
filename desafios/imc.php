<?php

class IMC{

     public function calcularIMC($peso, $altura)
     {
        $imc = $peso /($altura * $altura);

         echo "Seu IMC é " . number_format((float)$imc, 2, '.', ''). " Kg/m2. Você está com o IMC ";

         if($imc < 18.5){
             echo "abaixo ";
         } else if($imc < 25){
             echo "dentro "; 
         } else {
             echo "acima";
         }

         echo " do recomendado." . PHP_EOL;

     }
}

$imcPessoa1 = new IMC();
$imcPessoa1->calcularIMC(52, 1.56);

