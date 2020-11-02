<?php
    /*Um comerciante comprou um produto por um determinado e quer vendê-lo com lucro de 45% se o valor
    do produto comprado pelo comerciante for menor que 40,00;
    caso contrário, o lucro sobre a venda será de 30%.
    informar valor do produto e informar o nome do comprador do produto.
    Após a verificação com base no valor do produto, exibir o nome do comprador e o valor da venda atualizado.*/
    $produto = 30;
    $comprador = "John";
    echo "Valor do Produto: $produto (sem porcentagem de lucro!) <br />";
    echo "Nome do Comprador do Produto: $comprador <br /> <br />";
    if ($produto <= 40)
    {
        $porcentagem = $produto * 0.45;
        $produto = $produto + $porcentagem;
        echo "Produto com o lucro de 45% incluido: $produto <br />";
        echo "Comprador: $comprador";
    }
    else
    {
        $porcentagem = $produto * 0.30;
        $produto = $produto + $porcentagem;
        echo "Produto com o lucro de 30% incluido: $produto <br />";
        echo "Comprador: $comprador";
    }
?>