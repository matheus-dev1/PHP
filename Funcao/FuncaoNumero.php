<?php
    function mais8($numero) #Aqui numero esta valendo 3
    {
        $numero += 8; #Faco uma adicao, e agora a variavel local $numero possui o valor 11.
        echo $numero; #Exibo o valor 11.
        echo "<br>"; #Pulo linha.
        #Programa se encerra, e a variavel numero e deletada e a variavel $a nao sofre nenhuma alteracao.
    }
    
    $a = 3; #Declaro que a minha variavel $a recebe um valor de 3.
    mais8($a); #Passo o valor de $a (3) como agumento para a funcao "mais8".
    echo $a;
?>