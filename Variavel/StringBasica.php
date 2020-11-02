<?php
    $texto = "Curso de PHP"; #Declaracao de Stirng.
    $teste = "Mauricio"; #Declaracao de String
    $inf = '---$teste--\n'; #Declaracao de String. Obs: Por as aspas estarem simples ele nao reconhece a
    #variavel teste dentro da string.
    $infI = "---$teste--\n"; #Atribuicao de String com adicao de tracoes ao lado.
    #Com as aspas duplas nos conseguimos reconhecer a variavel entao este valor ficaria ---Mauricio--
    echo $inf; #---$teste--
    echo "\n";
    echo $infI; #---Mauricio--
?> 