<?php
    $conexao = mysqli_connect("localhost", "Teste", "", "sistema_escolar");
 
    if (!$conexao)
    {
        die ("Falha na conexão com o BD " .mysqli_connect_errno());
        exit();
    }
    
    $id_aluno = $_POST['id_aluno'];
    
    $SQLSelect = "SELECT NOME FROM ALUNO WHERE IDALUNO = '$id_aluno'";
    $SQLSelectResult = mysqli_query($conexao, $SQLSelect);

    while($rowInfo = mysqli_fetch_assoc($SQLSelectResult))
    {
        echo "Resultado da consulta do aluno: " . $rowInfo['NOME'];
        echo "<br /> <br />";
    }
           
    $SQLSelect = "SELECT TELEFONE FROM TELEFONE WHERE ID_ALUNO = '$id_aluno'";
    $SQLSelectResult = mysqli_query($conexao, $SQLSelect);

    while($rowInfo = mysqli_fetch_assoc($SQLSelectResult))
    {
        echo "Número de telefone: ". $rowInfo['TELEFONE'];
        echo "<hr>";
    }
    
    mysqli_close($conexao);
?> 