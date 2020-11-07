<?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    
    $conection = mysqli_connect("localhost", "Teste", "", "sistema_escolar");
 
    if (!$conection)
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

    $SQLInsert = "INSERT INTO ALUNO (NOME, ENDERECO, BAIRRO, CIDADE, CEP)
    VALUES ('$nome', '$endereco', '$bairro', '$cidade', '$cep')";
  
    mysqli_query($conection, $SQLInsert);
    echo "<br>";
    echo "Aluno incluido com sucesso";

    mysqli_close($conection);
?>

<html>
    <head>
        <title>Formulario de Insercao de Dados</title>
    </head>
    <body>
        <p><font face="Arial, Helvetica, sans-serif" size="4">
            <a href="SQLInsertAluno.php">Clique aqui para voltar ao formulrio</a>
        </font></p>
    </body>
</html>