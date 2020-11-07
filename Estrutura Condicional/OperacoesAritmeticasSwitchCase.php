<?php
    /*Criar um arquivo .php para criar uma estrutura de switch case onde deverá ser informado uma
    valor numérico ou um símbolo que represente as operação aritmética.
    As operações a serem executadas são: soma; subtração; multiplicação; divisão e resto da divisão.*/

    $operacao = "/";
    $num1 = 5;
    $num2 = 5;

    switch ($operacao)
    {
        case "+":
            $result = $num1 + $num2;
            echo "Operacao: '+' | Soma: $num1 + $num2 | Resultado: ($result)";
            break;
        case "-":
            $result = $num1 - $num2;
            echo "Operacao: '-' | Subtracao: $num1 - $num2 | Resultado: ($result)";
            break;
        case "*":
            $result = $num1 * $num2;
            echo "Operacao: '*' | Multiplicacao: $num1 * $num2 | Resultado: ($result)";
            break;
        case "/":
            $result = $num1 / $num2;
            echo "Operacao: '/' | Divisao: $num1 / $num2 | Resultado: ($result)";
            break;
        case "%":
            $result = $num1 % $num2;
            echo "Operacao: '%' | Resto da Divisao: $num1 % $num2 | Resultado: ($result)";
            break;
        default:
            echo "Operacao Invalida!";
    }
?>