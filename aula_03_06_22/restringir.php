<?php
    session_start();
    if($_SESSION['logado'] !=1){
        header("Location: index.php");
    }
    $nome = $_SESSION['nome'];
    echo "Bem vindo $nome <br>";
    echo "VOCE ESTA NA PAGINA RESTRITA";

    echo "<br>";
    echo "<a href='logout.php'> SAIR</a>";
?>