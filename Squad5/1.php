<?php

$servername = "localhost"; #1
$username = "Teste"; #2
$userpassword = ""; #3
$database = "SQUAD5"; #4

$conection = mysqli_connect($servername, $username, $userpassword, $database);

if ($conection == false)
        {
            die("A conexao falhou ".mysqli_connect_error());
        }

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlQuerySelect = "insert into squad5.login (nome, email, senha)
                   VALUES ('$nome', '$email', '$senha')";
#$sqlQuerySelectResult = $conection -> query($sqlQuerySelect);

mysqli_query ($conection, $sqlQuerySelect);
    echo "<br>";
    echo "Aluno incluido com sucesso";
mysqli_close($link);
?>

#while ($rowInfo = $sqlQuerySelectResult -> fetch_assoc())

?>