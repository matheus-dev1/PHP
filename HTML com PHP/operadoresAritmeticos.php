<?php
    $num1 = 5;
    $num2 = 4;
    #Eu consigo usar tags HTML dentro da estrutura e arquivos PHP.
?>

<!DOCTYPE html>

<html>
    <head>
        <meta lang = "pt-br">
        <meta charset = "utf-8">
        <title>Operadores Aritmeticos</title>
    </head>

    <body>

        <p>Valores</p>
        <p><?php echo $num1?> e <?php echo $num2 ?></p>

        <p>Soma</p>
        <?php echo $num1 + $num2 ?>
        <br>
        
        <p>Multiplicacao</p>
        <?php echo $num1 * $num2 ?>
        <br>

        <p>Divisao</p>
        <?php echo $num1 / $num2 ?>
        <br>

        <p>Subtracao</p>
        <?php echo $num1 - $num2 ?>
        <br>

        <p>Modulo (Resto da Divisao)</p>
        <?php echo $num1 % $num2 ?>
        <br>
    </body>
</html>