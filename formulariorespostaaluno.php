<?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    
    $link = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$link)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    echo "Informações que serão inseridas na tabela aluno";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $endereco;
    echo "<br>";
    echo $bairro;
    echo "<br>";
    echo $cidade;
    echo "<br>";
    echo $cep;
    echo "<br>";

    $insere = "insert into aluno (nome, endereco, bairro, cidade, cep)
    values ('$nome', '$endereco','$bairro', '$cidade', '$cep')";
  
    mysqli_query ($link, $insere);
     echo "<br>";
    echo "Aluno incluido com sucesso";

    mysqli_close($link);
?>

<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <p><font face="Arial, Helvetica, sans-serif" size="4">
            <a href="sqlinsertaluno.php">Clique aqui para voltar ao formulrio</a>
        </font>
    </body>
</html>