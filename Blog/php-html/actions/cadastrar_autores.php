<?php

    require_once "db_connect.php";

    #echo var_dump($connect);

    if (isset($_POST['cadastrar']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO AUTORES VALUES (null, '$nome', '$email', '$senha')";
        
        mysqli_query($connect, $sql);

        header("location: ../index.php");
    }
?>