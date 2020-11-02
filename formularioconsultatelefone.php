<?php
    $con = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$con)
    {
        die ("Falha na conexão com o BD " .mysqli_connect_errno());
        exit();
    }
    
    $id_aluno = $_POST['id_aluno'];
    
    $sel = "select nome from aluno where id = $id_aluno";
    $result = mysqli_query($con, $sel);

    while($row = mysqli_fetch_assoc($result))
    {
        printf("Resultado da consulta do aluno: %s", $row["nome"]);
        echo "<br>";
        echo "<br>";
    }
           
    $sel = "select telefone from telefone where id_aluno = $id_aluno";
    $result = mysqli_query($con, $sel);

    while($row = mysqli_fetch_assoc($result))
    {
        printf("Número de telefone: %d", $row["telefone"]);
        echo "<hr>";
    }
    
    mysqli_close($con);
?> 