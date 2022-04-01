<?php

$numeros=$_POST['numeros'];

switch($numeros) {
    case "1":
        echo "<h2>Domingo :)</h2>";
        break;
    case "2":
        echo "<h2>Segunda :{</h2>";
        break;
    case "3":
        echo "<h2>Terça :?</h2>";
        break;
    case "4":
        echo "<h2>Quarta :]</h2>";
        break;
    case "5":
        echo "<h2>Quinta :)</h2>";
        break;
    case "6":
        echo "<h2>Sexta :D</h2>";
        break;
    case "7":
        echo "<h2>Sábado ;)</h2>";
        break;
    default:
        echo "<h2> Você digitou um número errado, por favor um número entre 1 e 7! </h2>";
        break;

    
}

?>