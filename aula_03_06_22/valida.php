<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'LETICIA';
    $pass = '1234';

    if(($usuario == $user) && ($senha == $pass)){
        //echo "OK usuario validado";
        session_start();
        $_SESSION['nome'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restringir.php");
    }
    else{
        echo "Usuario e/ou senha incorretos!";
    }

?>