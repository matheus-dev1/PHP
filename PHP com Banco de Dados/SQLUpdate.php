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

    $SQLUpdate = "UPDATE CURSO SET NOME = 'Desenvolvimento de Games', COD_CUR = 'C1' WHERE COD_CUR = 'C6'";
    #Quando eu vou atulizar mais de 2 valores eu nao preciso usar outro SET.
    
    $SQLInsertResult = mysqli_query($conection, $SQLUpdate);

    mysqli_close($conection);
?> 