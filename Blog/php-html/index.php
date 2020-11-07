<?php
?>

<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <title>Blog | Pagina Inicial</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>

<body>
    
</body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto pt-2 container-login">
                <!--<span class="h3">Login</span>-->
                <h3 class="mb-4">Login</h3>
                <form action="../php-html/actions/login.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="label-form">E-mail: </label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="senha" class="label-form">Senha: </label>
                        <input class="form-control" type="password" name="senha" id="senha">
                    </div>
                    <button type="submit" name="logar" class="btn btn-primary mb-2">Entrar</button>
                    <a href="cadastro_autor.php" type="submit" name="logar" class="btn btn-success mb-2">Cadastrar</a>
                </form>
                <!--<p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem natus
                    tempore voluptatibus amet consequatur debitis laborum nemo voluptas corrupti, 
                    repellat reiciendis blanditiis. Cumque consequuntur amet iusto, nisi suscipit dicta natus?
                </p>-->
            </div>
        </div>
    </div>
</html>