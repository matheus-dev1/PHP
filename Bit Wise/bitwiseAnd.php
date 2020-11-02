<?php
    $a = 5;
    //Valor binario: 00000101
    $b = 4;
    //Valor binario:  00000001
 
    //Valor binario com And: 00000101
    //Valor binario com And: 00000001
    //Resultado Binario:     00000001
    $c = $a and $b;
    //Resutlado Binario: 00000001
 
    echo $c; echo "<br>";
    var_dump($c);
    // Resultado Exibido: 1

    #Neste tipo de comparacao ele sempre vai me retornar o maior valor.
?>