<?php

    session_start();

    require_once "db_connect.php";

    if(isset($_POST['logar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (strlen($email) > 0 && strlen($senha) > 0){
            $sql = "SELECT * FROM AUTORES WHERE EMAIL = '$email' AND SENHA = '$senha' LIMIT 1";

            $resultado = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_assoc($resultado)){
                if ($row['ID']){
                    $_SESSION['id'] = $row['ID'];
                    $_SESSION['nome'] = $row['NOME'];
                    $_SESSION['email'] = $row['EMAIL'];
                    #echo 'Usuario localizado';
                    header("location: ../painel.php");
                }
            }
        }
    }
?>