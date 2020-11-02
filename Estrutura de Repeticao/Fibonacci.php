<?php
    $num1 = $soma = 0;
    #Declaro que o primeiro numero e a soma comecem com ZERO.
    $num2 = 1;
    #Declaro que o meu segundo numero comece com UM. E isso e padrao sempre tem que estar assim.
    for ($contador = 1; $contador <= 21; $contador += + 1)
    #0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584 e muito mais...
    #O valor aonde contador tem que percorrer deve receber um desses valores. Neste caso coloquei 21.
    {
        $soma = $num1 + $num2;
        #Fazemos a soma do primeiro valor com o segundo e exibimos o seu resultado.
        echo "A soma de $num1 + $num2 = $soma <br />";
        #Exibir resultado.
        $num1 = $num2;
        #Pegamos o valor da variavel $num2 e armazenamos na variavel $num1 para que o programa possa rodar.
        $num2 = $soma;
        #E o valor de num2 recebe o valor da soma.
        #E assim vai ate atingir o contador atingir o valor de 21.
    }
?>