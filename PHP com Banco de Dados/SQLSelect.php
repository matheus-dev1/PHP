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
        echo "Sucesso: Sucesso ao conectar-se a base de dados <br /> <br />";
    }
     
    $SQLSelect = "SELECT * FROM CURSO";
    $SQLSelectResult = mysqli_query($conection, $SQLSelect);

    while($rowResult = mysqli_fetch_assoc($SQLSelectResult))
    #A funcao mysqli_fetch_assoc() me retorna linha a linha da query em que eu fiz.
    {
        printf("%s (%s)", $rowResult["cod_cur"], $rowResult["nome"]);
        echo "<br /> <br />";
        print_r($rowResult);
        echo "<br />";
        #Este %s faz com que nos podemos passar isso de pois usamos as varaveis.
        #Obs: %s e apenas para strings.
        #Obs: %d para inteiros.
        echo "<hr>";
    }
    
    mysqli_close($conection);
?> 