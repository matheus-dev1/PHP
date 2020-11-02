<?php
    /*Criar um arquivo .php para criar uma função que multiplique dois valores.
    É preciso que a função devolva o resultado usando o return.*/
    function mult($n1, $n2)
    {
        $soma = $n1 * $n2;
        return $soma;
    }
    $num1 = 5;
    $num2 = 6;
    echo mult($num1, $num2);
?>