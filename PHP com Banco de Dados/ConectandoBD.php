<?php
    $conection = mysqli_connect('localhost', 'Teste', '', 'recodepro');

    if (!$conection)
    {
        die("Falha na conexao com o BD" . mysqli_connect_errno());
    }
    else
    {
        echo "Sucesso: Sucesso ao conectar-se a base de dados";
    }
    #Se $conection for false, entao execute o bloco de comandos.
    mysqli_close($conection);
?>