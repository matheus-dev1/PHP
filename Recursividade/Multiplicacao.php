<?php
    function multiplicacao ($num, $mult){
        $soma = 0; 
        if ($mult == 0){
            return 0;
        }
        else {
            echo "Numeros somados: ";
            echo $num;
            echo "<br>";
            $soma = $num + multiplicacao($num, --$mult);
            return $soma;
            //soma e um acumulador dos resultados de todas as somas ate que a mult seja igual a zero.

            #a funcao multiplicaio na linha do return de soma faz simplesmente uma decrementacao, enquanto
            #o que vai sendo somado e o valor de num a variavel soma.
            # ou seja ele vai fazendo $num + $soma e assim ate mult ficar igual a 0.
            #o parametro mult e simplesmente como se fosse um contador.

            //O mult apenas define o quanto de vezes em que a funcao sera chamada, neste caso 3.
            //O retorno de multiplicacao sempre sera 5.
            //A soma sempre ira armazenar todos os 5 que aparecerem, neste caso foram 3 vezes e 
            //foi armazenado 5 + 5 + 5 = 15. (2), (1), (0)
        }
    }
    echo "Resultado: ", multiplicacao(5, 3);
?>