<?php
    $link = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$link)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    $del = "update curso set nome = 'Português Inglês' where cod_cur = 'C1'";
    mysqli_query ($link, $del);

    mysqli_close($link);
?> 