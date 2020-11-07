<?php
    require_once "db_connect.php";

    session_start();

    if(isset($_POST['cadastrar'])){
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $id = $_SESSION['id'];

        $sql = "INSERT INTO POSTS VALUES (null, '$titulo', '$conteudo', '$id')";

        mysqli_query($connect, $sql);

        header("Location: ../painel.php");
    }
?>