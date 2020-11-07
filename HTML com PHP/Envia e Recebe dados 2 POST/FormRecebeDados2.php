<script>
    alert("Registro efetuado com sucesso!");
</script>

<h2>Dados do Registro</h2>
Nome: <?php echo $_POST['nome']; ?> <br /> 
Senha: <?php echo $_POST['senha']; ?> <br />
Genero: <?php echo $_POST['genero']; ?>  <br />
Periodo: <?php echo $_POST['periodo'];?>
<?php
    $periodo = $_POST['periodo'];
    foreach ($periodo as $uniPeriodo)
    {
        echo "Periodo: $uniPeriodo <br />";
    }
?>
Cidade: <?php echo $_POST['cidade']; ?> <br /> <br />
<a href="FormEnviarDados.php">Voltar</a> <br />