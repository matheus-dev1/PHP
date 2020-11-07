<?php
    $servidor = "localhost";
    $usuario = "Teste";
    $senha = "";
    $banco = "blog";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_error()){
        echo "Conexao nao efetuada: " . mysqli_connect_error();
    }
?>