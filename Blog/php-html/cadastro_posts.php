<?php
   session_start();
    
    if(isset($_SESSION['id']) && $_SESSION['id'] <> ""){
        include_once "../php-html/includes/header.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <title>Blog | Cadastro de Autores</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="../js/script.js"></script>
    </head>

<body>
<div class="container">
        <div class="row">
            <div class="col-8 mx-auto pt-2 container-login">
                <!--<span class="h3">Login</span>-->
                <h3 class="mb-4">Cadastro de Posts</h3>
                <form action="./actions/cadastrar_posts.php" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="titulo" class="label-form">Titulo: </label>
                        <input class="form-control" type="text" name="titulo" id="titulo" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label for="conteudo" class="label-form">Conteudo: </label>
                        <textarea class="form-control" name="conteudo" id="conteudo" onkeyup="valida_campos()"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem" class="label-form">Imagem: </label>
                        <input type="file" name="imagem" id="imagem">
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

<?php
    include_once "../php-html/includes/footer.php";
    }
    else{
        header("location: ../php-html/index.php");
    }

?>
