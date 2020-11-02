<?php
    /*
    Criar um programa em PHP para verificar os lados de um triângulo.
    Informar valores para as variáveis e através de uma estrutura de controle exibir a
    informação do nome do triângulo.
    Atividade com 15 minutos de duração.
    Escaleno: todos os lados são diferentes
    Isósceles: Apenas dois lados são iguais
    Equilátero: Todos os lados são iguais
    */

    $a = 10;
    $b = 20;
    $c = 30;

    if ($a != $b and $a != $c and $b != $c){
        echo "Escaleno: todos os lados são diferentes";
    }
    elseif ($a == $b or $a == $c or $b == $c)
    {
        echo "Isósceles: Apenas dois lados são iguais";
    }
    elseif ($a == $b and $a == $c and $b == $c)
    {
        echo "Equilátero: Todos os lados são iguais";
    }
?>