<?php
$nome = $_POST['name'];
$carac = $_POST['carac'];
$qtd = $_POST['qtd'];
$kg = $_POST['kg'];

$conection = mysqli_connect("localhost", "Teste", "", "produto");

if ($conection == true){
    $SQLInsert = "INSERT INTO prod (nome, caracteristica, quantiadade, peso)
    VALUES ('$nome', '$carac', '$qtd', '$kg')";
    $SQLInsertResult = mysqli_query($conection, $SQLInsert);
    echo "<script> 
            alert('Cadastro efetuado com sucesso');
            window.location.href = 'SelectProdutos.php'
         </script>";
}
?>