<?php
    //dados do SGBD MySQL para a conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "teste_mysqli";

    //criando conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    //chegando a conexao
    if ($conexao->connect_error){
        die("Conexão falhou: " . $conn->connect_error);
    }
    echo "Conectado com sucesso";
?>