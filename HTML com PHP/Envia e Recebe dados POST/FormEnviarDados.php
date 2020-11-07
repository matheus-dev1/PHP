<title>Enviar Dados</title>
<form action="FormRecebeDados.php" method="POST">
    <p>
        <label for="nome">Name: </label>
        <input type="text" name="nome" value="" />
    </p>
    <p>
        <label for="idade">Idade:</label>
        <input type="text" name="idade" value="" />
    </p>
    <p>
        <input type="submit" value="Faça o Envio" />
        <!-- Se action possui um arquivo quando voce clicar em submit voce sera redirecionado. -->
    </p>
</form>