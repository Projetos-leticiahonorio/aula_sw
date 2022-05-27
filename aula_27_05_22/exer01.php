<?php
echo "1- funçao sem retorno e sem parametros <br>";
    function teste(){
        echo "Leticia Honorio";
    }

    teste();
    echo "<hr>";

echo "2- funçao com retorno e sem parametros <br>";
    function teste2(){
        $retorno = "honorio leticia";
        return $retorno;
    }
    $recebe = teste2();
    echo "$recebe <br>";
    echo "<hr>";

echo "3- funçao sem retorno e com parametros <br>";
    function teste3($a){
        echo "$a <br>";
    }
    teste3('Oi galera');
    $x = 10;

    teste3('Aula de Sw-I');
    teste3($x);

    echo "<hr>";

echo "4- funçao com retorno e com parametros <br>";
    function teste4($x, $y){
        $soma = $x + $y;
        return $soma;
    }

    $resultado = teste4(10,20);
    echo "A soma é: $resultado";
    echo "<hr>";
?>