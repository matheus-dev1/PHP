<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br"> 
        <meta charset="utf-8">
        <title>Conectando PHP com MySQL</title>
    </head>

    <body>
        <?php
        /*Primeiro nos temos que definir 4 coisas.
        1. O nome do servidor em que a sua aplicacao esta rodando, no meu caso e a localhost (XAMPP/Apache).
        2. O nome do usuario do banco de dados.
        3. A senha do usuario do banco de dados.
        4. O nome do banco de dados.*/

        $servername = "localhost"; #1
        $username = "Teste"; #2
        $userpassword = ""; #3
        $database = "escola"; #4

        $conection = mysqli_connect($servername, $username, $userpassword, $database);
        #Neste linha acima nos estamos passando os argumentos necessarios para fazer a conexao do 
        #bando de dados. e armazenamos o resultado em $conection assim liberando mais metodos sobre a 
        #conexao do bando de dados por exemplo um e testar se ele esta conectado corretamente.

        if ($conection == false)
        {
            die("A conexao falhou ".mysqli_connect_error());
            #A funcao die() finaliza o programa PHP.
            #O metodo mysql_connect_error() exibe o erro em que aconteceu na conexao.
        }

        #print_r($conection);
        #Esta varivel $conection contem o objeto do nosso bando de dados, onde nos podemos fazer diversas
        #coisas com esta variavel.

        #**CONTEUDO DE $CONECTION**: mysqli Object ( [affected_rows] => 0 [client_info] => mysqlnd 7.4.11 
        #[client_version] => 70411 [connect_errno] => 0 [connect_error] => [errno] => 0 [error] => 
        #[error_list] => Array ( ) [field_count] => 0 [host_info] => localhost via TCP/IP [info] => 
        #[insert_id] => 0 [server_info] => 8.0.19 [server_version] => 80019 [sqlstate] => 00000 
        #[protocol_version] => 10 [thread_id] => 23 [warning_count] => 0 )

        $sqlQuerySelect = "SELECT NOME, IDADE, CURSO FROM ALUNO";
        #Nesta linha cima nos definimos a consulta em que queremos fazer.
        $sqlQuerySelectResult = $conection -> query($sqlQuerySelect);
        #Esta linha cima quer dizer quero pegar a conexao feita em entre o bando de dados e usar um funcao
        #chamada query, que executa um comando SQL em nosso banco de dados, no nosso caso nos estamos
        #passando um consulta SELECT e armazenando os resultados deste SELECT na variavel 
        #$sqlQuerySelectResult no caso a variavel se torna um array.

        #print_r($sqlQuerySelectResult);
        #Neste print ele me mostra informacoes sobre a consulta mas nao os dados propriamente dito.
        #**CONTEUDO DE $sqlQuerySelectResult**: mysqli_result Object ( [current_field] => 0 [field_count]
        # => 3 [lengths] => [num_rows] => 4 [type] => 0 )

        while ($rowInfo = $sqlQuerySelectResult -> fetch_assoc())
        {
        #Nos pegamos o objeto da consulta ($sqlQuerySelectResult) e usamos o metodo fetch_assoc() que nos
        #retorna todos os valores da consulta, e armazenamos em $rowInfo e exibimos o array $rowInfo.
            #print_r($rowInfo); //Exibe todas linhas e colunas da nossa consulta.
            echo "<p> O aluno " . $rowInfo['NOME'] . " que possui a idade " . $rowInfo['IDADE'] .
             " anos e esta estudando " . $rowInfo['CURSO'] . "<p /> <hr />";
        }
        ?>
        <button> <a href="cadastro.php"> Voltar </button>
    </body>
</html>