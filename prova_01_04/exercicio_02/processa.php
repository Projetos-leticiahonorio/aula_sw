<?php

$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

echo "<h2> Você digitou os numeros nessa ordem</h2>";
    echo "<br>";
    echo "$n1";
    echo "<br>";
    echo "$n2";
    echo "<br>";
    echo "$n3";
    echo "<br>";

    echo "<h3> Vamos colocá-los em ordem crescente!</h3>";

    if ($n1<$n2 && $n2<$n3) {
        echo "$n1>$n2$n3";
    }
    else{
        echo "";
    }

    if ($n1<$n3 && $n3<$n2) {
        echo "$n1>$n3>$n2";
    }
    else{
        echo "";
    }

    if ($n2<$n1 && $n1<$n3) {
        echo "$n2>$n1>$n3";
    }
    else{
        echo "";
    }

    if ($n2<$n3 && $n3<$n1) {
        echo "$n2>$n3>$n1";
    }
    else{
        echo "";
    }

    if ($n3<$n2 && $n2<$n1) {
        echo "$n3>$n2>$n1";
    }
    else{
        echo "";
    }

    if ($n3<$n1 && $n1<$n2) {
        echo "$n3>$n1>$n2";
    }
    else{
        echo "";
    }


?>