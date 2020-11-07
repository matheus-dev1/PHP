<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <title>Blog | Cadastro de Autores</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script src="../js/script.js"></script>
    </head>

<body>
<div class="container">
        <div class="row">
            <div class="col-4 mx-auto pt-2 container-login">
                <!--<span class="h3">Login</span>-->
                <h3 class="mb-4">Cadastro de Autores</h3>
                <form action="../php-html/actions/cadastrar_autores.php" method="POST">
                    <div class="form-group">
                        <label for="nome" class="label-form">Nome: </label>
                        <input class="form-control" type="text" name="nome" id="nome" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-form">E-mail: </label>
                        <input class="form-control" type="email" name="email" id="email" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label for="senha" class="label-form">Senha: </label>
                        <input class="form-control" type="password" name="senha" id="senha" onkeyup="valida_campos()">
                    </div>
                    <button type="submit" name="cadastrar" class="btn btn-success mb-2" id="cadastrar_autores">Cadastrar</button>
                </form>
                <!--<p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem natus
                    tempore voluptatibus amet consequatur debitis laborum nemo voluptas corrupti, 
                    repellat reiciendis blanditiis. Cumque consequuntur amet iusto, nisi suscipit dicta natus?
                </p>-->
            </div>
        </div>
    </div>
</body>

</html>