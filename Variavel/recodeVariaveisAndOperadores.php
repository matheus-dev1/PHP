<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <title>Variaveis e Operadores com PHP</title>
    </head>
    <body>
        <?php
            echo "Variaveis e Exibicao.";
            $nome = "Matheus";
            $idade = 21;
            echo "<p> Nome:".$nome."<br />"."Idade: ".$idade."<br /> </p>";
            print($nome);
            print("<br />");
            print_r($idade);
            print("<br /> <br />");

            $a = 10;
            $b = 4;

            echo "Operadores Aritmeticos. <br />";
            $adicao = $a + $b;
            $subtracao = $a - $b;
            $multiplicacao = $a * $b;
            $divisao = $a / $b;
            $modulo = $a % $b;
            $exponenciacao = $a ** $b;
            
            echo $adicao."<br />";
            echo $subtracao."<br />";
            echo $multiplicacao."<br />";
            echo $divisao."<br />";
            echo $modulo."<br />";
            echo $exponenciacao."<br /> <br />";

            echo "Operadores de Atribuicao. <br />";
            $a += $b;
            echo $a."<br />";
            $a -= $b;
            echo $a."<br />";
            $a *= $b;
            echo $a."<br />";
            $a /= $b;
            echo $a."<br />";
            $a %= $b;
            echo $a."<br />";
            $a .= $b; // Concatenacao.
            echo $a."<br /> <br />";

            echo "Operadores de incremento e Decremento <br />";
            $count = 0;

            echo ++$count."<br />"; #Pre-incremento
            echo $count++."<br />"; #Pos-incremento
            echo --$count."<br />"; #Pre-Decremento
            echo $count--."<br />"; #Pos-Decremento
            print($count);
            print("<br /> <br />");

            echo "Operadores de Comparacao. <br />";
            $a = 10;
            $b = 4;
            $c = "10";

            if ($a == $c) #Igual = Valor
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            if ($a === $c) #Identico = Valor e tipo
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            if ($a != $c) #Diferente
            {
                
                echo "Diferenca";
            }
            else
            {
                echo "Igual";
            }
            echo "<br />";
            if ($a <> $c) #Diferente 2
            {
                
                echo "Diferenca 2";
            }
            else
            {
                echo "Igual 2";
            }
            echo "<br />";
            if ($a !== $c) #Diferente 2
            {
                
                echo "Nao identico";
            }
            else
            {
                echo "identico";
            }
            echo "<br />";

            echo "Operadores Logicos. <br />";
            $a = true;
            $b = false;

            if ($a and $b)
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            if ($a && $b)
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            if ($a or $b)// e/ou
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            if ($a || $b) // e/ou
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            if ($a xor $b) #Ou exclusivo, ou seja, apenas um dos dois valores pode ser verdadeiro para retornar True.
            //Um ou outro.
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
            echo "<br />";
            if (!$a) //Negacao
            {
                echo "False";
            }
            else
            {
                echo "True";
            }
            echo "<br />";
            if (!$b) //Negacao
            {
                echo "True";
            }
            else
            {
                echo "False";
            }
            echo "<br />";
        ?>
    </body>
</html>