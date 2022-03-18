<?php

$idade = 19;
$carteira = TRUE;

if($idade >= 18){
   //Comandos para verdadeiro

   if($carteira == TRUE){
    //Comandos para verdadeiro
 
    echo "Aprovado, Boa viagem!";

    $carteira = "SIM";
 }
}
else{
    //comandos para falso
    
         echo "Reprovado, Você não deveria estar dirigindo";

         $carteira = "NÃO";
}

    echo "<br>";
    echo "Sua idade é: $idade <br>";
    echo "Tem habilidade: $carteira <br>";
    echo "<br>";
?>