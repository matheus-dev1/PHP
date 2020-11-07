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

    $SQLInsert = "INSERT INTO CURSO (COD_CUR, NOME, TIPO, DURACAO, MENSALIDADE)
    VALUES ('C9', 'Letras', 'Bacharelado', '4', '1200')";

    $SQLInsertResult = mysqli_query($conection, $SQLInsert);
    #A variavel SQLInsertResult me retorna o objeto do mysqli_query onde nos podemos fazer varios testes depois.

    mysqli_close($conection);
?>