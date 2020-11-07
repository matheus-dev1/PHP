<!DOCTYPE html>

<html>
    <head>
    <meta lang="pt-br">
    <meta charset="utf-8">
    <title>Enviar Dados</title>
    </head>
    <body>
        <form action="FormReceberNota.php" method="GET">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" value=""/>

            <br />

            <label for="nota1">Nota 1: </label>
            <input type="number" name="nota1" value=""/>

            <br />
            
            <label for="nota2">Nota 2: </label>
            <input type="number" name="nota2" value=""/>

            <br />

            <input type="submit" value="Enviar notas">
        </form>
    </body>
</html>