<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exercicio 01</title>
</head>
<body>

    <?php

    $nome=$_POST['nome'];
    $idade=$_POST['idade'];

    $resp= 2022-$idade;

    echo "<h1>Olá $nome pelos meus cálculos você tem $resp anos de idade</h1>";

    ?>

</body>
</html>
