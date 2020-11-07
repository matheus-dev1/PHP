<?php
    $servername = "localhost";
    $username = "Teste";
    $password = "";
    $database = "recodepro";

    $conection = mysqli_connect($servername, $username, $password, $database);

    if (!$conection)
    {
        die("Falha na conexao com o BD" . mysqli_connect_errno());
    }
    else
    {
        echo "Sucesso: Sucesso ao conectar-se a base de dados";
    }

    $SQLDelete = "DELETE FROM CURSO WHERE cod_cur = 'C5'";
    $SQLInsertResult = mysqli_query ($conection, $SQLDelete);

    mysqli_close($conection);
?>