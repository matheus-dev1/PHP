<?php
    function soma($v1, $v2) #A funcao recebe os parametros.
    #Obs: Nos podemos passar os nomes da variaveis na chamada da funcao como parametro tambem.
    #Ou seja, eu posso colocar $num1 e $num2 em vez de $v1 e $v2
    {
        $somaval = $v1 + $v2; #Fazemos uma soma, e armazenamos em somaval.
        return $somaval; #Retornamos o valor de somaval (17).
    }
    $num1 = 10; #Declaro o valor de 10.
    $num2 = 7; #Declaro o valro de 7.
    echo soma($num1, $num2); #Inicio a funcao e passo dois arumentos, num1 e num2. 
    #Obs: O valor de retorno sera 17 entao caso eu queira usar este valor de alguma forma eu posso.
?>