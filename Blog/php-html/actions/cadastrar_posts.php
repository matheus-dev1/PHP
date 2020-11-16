<?php
    require_once "db_connect.php";

    session_start();

    if(isset($_POST['cadastrar'])){
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $id = $_SESSION['id'];

        $nome_imagem = $_FILES['imagem']['name'];
        $temp_file = $_FILES['imagem']['tmp_name'];
        $destino = "../../img/$nome_imagem";
        move_uploaded_file($temp_file, $destino);

        $sql = "INSERT INTO POSTS VALUES (null, '$titulo', '$conteudo', '$id', '../img/$nome_imagem')";

        mysqli_query($connect, $sql);

        header("Location: ../painel.php");
    }
?>