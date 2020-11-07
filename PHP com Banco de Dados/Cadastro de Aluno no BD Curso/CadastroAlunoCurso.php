<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Cadastre-se</title>
</head>
<body>
        <center>
        <h1>Cadastre-se</h1>
    <form action="" name="cadastro" method="POST">
        <!--Eu posso dar um nome para o meu fomulario com a tag name="".-->
        <!--O arquivo para onde nos iremos enviar os nososs dados do form.
            Obs: Se eu deixa o valor de action vazio os valores serao enviados para a msema tela.-->
        <!--O method e como os nossos dados serao transportados.
        O valor POST para o method faz com que os valores acabem nao sendo mostrados na URL.
        O valor GET para o method faz com que os valores acabem sendo exibidos como par chave-valor na url.-->
        <label for="nome">Informe seu nome:</label>
        <br>
        <input type="text" name="nome" value="">
        <br><br>
         
        <label for="idade">Informe sua idade:</label>
        <br>
        <input type="number" name="idade"  value="">
        <br><br>

        <label for="curso">Informe seu Curso:</label>
        <br>
        <input type="text" name="curso" value="">
        <br><br>

        <button type="submit" name= "submit">Cadastrar</button>
        <button>
            <a href="ConexaoConsultaBD.php">
            Verificar Dados
        </button>
        </center>
    </form>

    <?php
        $servername = "localhost"; #1
        $username = "Teste"; #2
        $userpassword = ""; #3
        $database = "escola"; #4

        $conection = mysqli_connect($servername, $username, $userpassword, $database);

        if ($conection == false)
        {
            die("A conexao falhou ".mysqli_connect_error());
        }

        if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['curso']))
        #A funcao isset() varifica se a recebimento do metodo POST ou GET 
        #possui conteudo, caso nao entao ele falha
        {
            #echo "Dados Recebidos!";
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $curso = $_POST['curso'];

            $sqlQuerySelect = "INSERT INTO ALUNO (NOME, IDADE, CURSO)
                                VALUES ('$nome', '$idade', '$curso')";
            $sqlQuerySelectResult = $conection -> query($sqlQuerySelect);

            if ($sqlQuerySelectResult == true)
            {
                echo "Dados inseridos com sucesso! <br/ >";
                header("Refresh:3;ConexaoConsultaBD.php");
                # Refresh: 3; -- Quer dizer que vai atualizar a pagina daqui 3 segundos.
                # Depois do ponto e vigula; O nome do local aonde voce quer ir, no caso o arquivo .php
                # que exibe todos os meus dados do meu banco de dados.
                #Obs: Tem que estar tudo junto.
            }
            else 
            {
                echo "Dados nao foram inseridos";
            }
        }
        else
        {
            echo "Campo(s) nao preenchido(s).";
        }
    ?>
</body>
</html>