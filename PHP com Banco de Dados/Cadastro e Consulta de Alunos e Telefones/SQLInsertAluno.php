<html>
    <head>
        <title>Formulario - Cadastro Aluno</title>
    </head>
    <body>
        <form name="cadastro_aluno" method="post" action="FormInfoAluno.php">
            <label for="nome">Nome:</label> 
            <input name="nome" type="text" placeholder="Digite o seu nome">

            <br /><br />

            <label for="endereco">Endereço:</label> 
            <input name="endereco" type="text" placeholder="Digite o seu endereco">

            <br /><br />

            <label for="bairro">Bairro:</label> 
            <input name="bairro" type="text" placeholder="Digite o seu bairro">

            <br /><br />

            <label for="cidade">Cidade:</label> 
            <input name="cidade" type="text" placeholder="Digite o seu cidade">

            <br /><br />

            <label for="cep">Cep:</label> 
            <input name="cep" type="number" placeholder="Digite o seu cep">

            <br /><br />

            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar Campos">
        </form>
    </body>
</html>
