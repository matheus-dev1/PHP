<!DOCTYPE html>

<html>
    <head>
    <meta lang="pt-br">
    <meta charset="utf-8">
    <title>Enviar Dados</title>
    </head>
    <body>
        <form action="FormRecebeDados2.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" value=""/>

            <br />

            <label for="senha">Senha: </label>
            <input type="password" name="senha" value="">

            <br /><br />

            <label for="masculino">Masculino: </label>
            <input type="radio" name="genero" id="masculino" value="Masculino" checked>

            <br />

            <label for="feminino">Feminino: </label>
            <input type="radio" name="genero" id="feminino" value="Feminino">

            <br /><br />

            <label for="outros">Feminino: </label>
            <input type="radio" name="genero" id="outros" value="Outros">

            <br /><br />

            <label for="manha">Manha: </label>
            <input type="checkbox" name="periodo" id="manha" value="Manha" checked>

            <br />

            <label for="tarde">Tarde: </label>
            <input type="checkbox" name="periodo" id="tarde" value="Tarde">

            <br />

            <label for="noite">Noite: </label>
            <input type="checkbox" name="periodo" id="noite" value="Noite">

            <br /><br />

            <label for="cidade">Selecione sua Cidade: </label>
            <select name="cidade" id="cidade">
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Curitiba">Curitiba</option>
            </select>

            <br /><br />

            <button type="submit" name="submit">Enviar</button>
            <button type="reset" name="reset">Apagar informacoes</button>
        </form>
    </body>
</html>