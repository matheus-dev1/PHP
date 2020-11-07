<html>
    <head>
        <title>Formulario - Cadastro Telefone</title>
    </head>
    <body>
        <form name="cadastro_telefone" method="POST" action="FormRespostaTelefone.php">
            <label for="id_aluno">Aluno: </label>
            <input name="id_aluno" type="number" placeholder="Digite o nome do aluno">

            <br /> <br />

            <label for="telefone">Telefone: </label> 
            <input name="telefone" type="number" placeholder="Digite o numero de telefone do aluno">

            <br /><br />

            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar Campos">
        </form>
    </body>
</html>
