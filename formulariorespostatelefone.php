<?php
    $id_aluno = $_POST['id_aluno'];
    $telefone = $_POST['telefone'];
        
    $link = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$link)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    echo "Informações que serão inseridas na tabela aluno";
    echo "<br>";
    echo $id_aluno;
    echo "<br>";
    echo $telefone;
    
    $insere = "insert into telefone (id_aluno, telefone)
    values ('$id_aluno', '$telefone')";
  
    mysqli_query ($link, $insere);
     echo "<br>";
    echo "Telefone incluido com sucesso";

    mysqli_close($link);
?>

<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <p><font face="Arial, Helvetica, sans-serif" size="4">
            <a href="sqlinserttelefone.php">Clique aqui para voltar ao formulrio</a>
        </font>
    </body>
</html>