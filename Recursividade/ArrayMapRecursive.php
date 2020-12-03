<?php
    function ArrayMapRecursive($IsIntFunction, $ArrayParametro){
        //A ideia desta funcao e conseguir passar por todos os niveis de um array independente de
        //qual seja a quantidade de niveis.
        $ArrayRetorno = array();
        #Este ArrayRetorno serve para a gente colocar todo o array em que a gente vai verificar nele
        #e ate as possiveis mudancas, mas nos precisamos dele pra armazenar indice a indice.
        foreach ($ArrayParametro as $chave => $valor){
            //Estou criando um foreach para passar por todos os valor par chave do array recebidido como
            //parametro do usuario.
            if (is_array($valor)){
                //Aqui nos temos que usar a variavel valor porque quanto um array esta dentro de outro
                //array ou seja esta em outro nivel, ele recebe uma chave de indice e o valor array,
                //definindo que ele e um array.
                $ArrayRetorno[$chave] = ArrayMapRecursive($IsIntFunction, $valor);
                //Se o valor do indice em que eu estou verificando for um array entao ele executa este bloco.
                //O nosso arrayRetorno na posicao chave vai receber o valor em que ele esta.
                //e eu vou chamar a funcao denovo porem dentro de outro nivel de array.
            }
            else{
                $ArrayRetorno[$chave] = $IsIntFunction($valor);
                //Sim isso e uma funcao, em "forma de variavel" onde estamos passando o parametro
                //valor para verificar se do tipo inteiro.
            }
        }
        return $ArrayRetorno;
    }

    function IsInt ($item){
        if(is_int($item)){
            return "E um inteiro";
        }
        else{
            return "$item";
        }
    }

    $ArrayTeste = array(
        'chave1' => 'valor1',
        'chave2' => 'valor2',
        'aqui' => 2,
            array(
                'aqui2' => 55,
                'chave1 nivel2' => 'valor1 nivel2',
                array(
                    'aqui3' => 33,
                    'chave1 nival3' => 'valo1 nivel3'
                )
            )
    );
    echo "<pre>";
    print_r(ArrayMapRecursive('IsInt', $ArrayTeste));
    echo "</pre>";
    //Quando passamos uma funcao para outra funcao devemos passar como strin.
?>