<?php
    $a = 4; #Declaracao da Variavel.
    $b = 2; #Declaracao da Variavel.
    echo $a/$b == 2 ? 
    #Teste, se 4 dividido por 2 for igual a 2 exiba a primeira Stirng, caso nao, execute a Segunda String.
    "O resultado da divisão é 2" : #Primeira String.
    "O resultado da divisão não é 2"; #Segunda String.
    
    /*
    Isto e a mesma coisa do "Ternario" que esta em cima.
    if ($a / $b == 2){
        echo "O resultado da divisão é 2";
    }
    else {
        echo "O resultado da divisão não é 2";
    }
    */
?>