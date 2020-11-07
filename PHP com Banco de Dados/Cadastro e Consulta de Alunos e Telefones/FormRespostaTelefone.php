<?php
    $id_aluno = $_POST['id_aluno'];
    $telefone = $_POST['telefone'];
        
    $conexao = mysqli_connect("localhost", "Teste", "", "sistema_escolar");
 
    if (!$conexao)
    {
        die("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    echo "Informações que serão inseridas na tabela aluno";
    echo "<br>";
    echo $id_aluno;
    echo "<br>";
    echo $telefone;
    
    $SQLInsert = "INSERT INTO TELEFONE (id_aluno, telefone) VALUES ('$id_aluno', '$telefone')";
  
    mysqli_query ($conexao, $SQLInsert);
    echo "<br>";
    echo "Telefone incluido com sucesso";

    mysqli_close($conexao);
?>

<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <p><font face="Arial, Helvetica, sans-serif" size="4">
            <a href="SQLInsertTelefone.php">Clique aqui para voltar ao formulrio</a>
        </font></p>
    </body>
</html>