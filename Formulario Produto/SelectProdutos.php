<html>
    <body>
        <a href="FormProduto.html">Voltar</a>
        <hr><br>
    </body>
</html>

<?php
    $conection = mysqli_connect("localhost", "Teste", "", "produto");

    if ($conection == true){

    $SQLSelect = "SELECT * FROM prod";
    $SQLSelectResult = mysqli_query($conection, $SQLSelect);
    while($rowResult = mysqli_fetch_assoc($SQLSelectResult)){
        echo $rowResult['nome'];
        echo "<br>";
        echo $rowResult['caracteristica'];
        echo "<br>";
        echo $rowResult['quantiadade'];
        echo "<br>";
        echo $rowResult['peso'];
        echo "<hr> <br>";
    }
    }
?>