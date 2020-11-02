<?php
    $a = 8;
    //Valor binario:  00000101
    $b = 4;
    //Valor binario:  00000001
 
    //Valor binario com Or: 00000101
    //Valor binario com Or: 00000001
    //Resultado Binario:    00000101
    $c = $a or $b;
    //Resultado Binario: 00000101
    
    echo $c; echo "<br>";
    var_dump($c);
    // Resultado: 1

    #Neste tipo de comparacao ele sempre vai me retornar o maior valor.
?>