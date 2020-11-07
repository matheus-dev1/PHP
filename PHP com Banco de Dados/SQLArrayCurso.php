<?php
    $servername = "localhost";
    $username = "Teste";
    $password = "";
    $database = "recodepro";

    $conection = mysqli_connect($servername, $username, $password, $database);

    if (!$conection)
    {
        die("Falha na conexao com o BD" . mysqli_connect_errno());
    }
    else
    {
        echo "Sucesso: Sucesso ao conectar-se a base de dados";
    }

    $cursos = array();
    #Criamos um array vazio para que nos podemos fazer um "append" quando o mysql_fetch_assoc() estiver rodando.
    $SQLSelect = "SELECT * FROM CURSO";
    $SQLSelectResult = mysqli_query($conection, $SQLSelect);

    echo "<br />" . "Quantidade de linhas da tabela Curso: ". mysqli_num_rows($SQLSelectResult);

    while($rowResult = mysqli_fetch_assoc($SQLSelectResult))
    {
        array_push($cursos, $rowResult);
        #Estamos inserindo como se fosse o append. Linha a linha da Array().
    }



    foreach($cursos as $curso)
    {
?>
        <table border="1">
            <tr>
                <td>
                    <?php echo $curso['cod_cur'];?>
                </td>
                <td>
                <?php echo $curso['nome'];?>
                </td>
            </tr>
        </table>
<?php
    }
    mysqli_close($conection);
    #print_r($cursos);
?>