<?php
    #Obs: Nao necessariamente precisamos estar usando o nosso script .PHP em um arquivo HTMl, como
    #mostra neste programa. Porem o mais comum e usar em um arquivo .HTML

    $raw_string = 'Teste de String';
    echo gettype($raw_string), '<br>'; 
    #Este e um exemplo em que nos usamos dois argumentos na funcao echo para que ele exiba o tipo da variavel
    #e tambem de uma quebra de linha.

    #Aspas simples e string pura, ou seja, apenas string independente do conteudo
    #Aspas duplas possibilita a insercao se valores, argumentos nomeados, caracteres de escape dentre outros

    $string = "---$raw_string---";
    echo gettype($string), "<br>";

    echo gettype(print("")), "<br>";
    #Ele retorna integer porque o retorno de print sempre e 1.

    #Com "Echo" pode ser feita concatenacoes e retornar diversos valores.
    #Ja o print pode apenas retornar um valor.

    $int = 555;
    echo gettype($int), "<br>";

    $negative_int = -666;
    echo gettype($negative_int), "<br>";

    $float = 3.1416;
    echo gettype($float), "<br>";

    $octal = 0234;
    echo gettype($octal), "<br>"; #Octal retorno de 156

    $hexa = 0x34;
    echo gettype($hexa), "<br>"; #Hecadecimal retorno de 52

    $milhares = 23e10; #Este 10 depois do "e" quer dizer quantos ZEROS ele vai ter depois do numero 23.
    echo gettype($milhares), "<br>"; #valor de milhar retornado 230000000000

    $bolean = true;
    echo gettype($bolean), "<br>";
?>