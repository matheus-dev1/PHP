<?php
    #Obs: Nao necessariamente precisamos estar usando o nosso script .PHP em um arquivo HTMl, como
    #mostra neste programa. Porem o mais comum e usar em um arquivo .HTML

    #Boa Pratica: Letra minusculas ou apenas a primeira letra maiuscula quer dizer variaveis.
    #Todas as letras maiusculas querem dizer constantes

    $raw_string = 'Teste de String';
    print("$raw_string <br>"); 
    #Aspas simples e string pura, ou seja, apenas string independente do conteudo
    #Aspas duplas possibilita a insercao se valores, argumentos nomeados, caracteres de escape dentre outros

    $string = "---$raw_string---";
    print("$string <br>");

    echo print("Print dentro de Echo <br>");
    #Com "Echo" pode ser feita concatenacoes e retornar diversos valores.
    #Ja o print pode apenas retornar um valor.

    $int = 555;
    print("$int <br>");

    $negative_int = -666;
    print("$negative_int <br>");

    $float = 3.1416;
    print("$float <br>");

    $octal = 0234;
    print("$octal <br>"); #Octal retorno de 156

    $hexa = 0x34;
    print("$hexa <br>"); #Hecadecimal retorno de 52

    $milhares = 23e10; #Este 10 depois do "e" quer dizer quantos ZEROS ele vai ter depois do numero 23.
    print("$milhares <br>"); #valor de milhar retornado 230000000000

    $bolean = true;
    print("$bolean <br>");

    define('NOME','Matheus'); #Valor constante
    echo NOME , "<br>";

    $array[0] = "Primeiro Array - Metodo 1";
    $array[1] = "Segundo Array - Metodo 1";
    echo $array[0], " e ", $array[1], "<br>";

    $array2 = array(0 => "Primeiro Array - Metodo 2 ", 1 => "Segundo Array - Metodo 2");

    echo $array2[0], " e ", $array2[1], "<br>";

    var_dump($array); #O var_dump() me mostra informacoes sobre a minha variavel. //var_dump($array2);

    echo "<br>";

    print_r($array2);

    echo "<br>";

    var_dump($bolean);

    list($a, $b, $c) = array("a", "b" ,"c");
    echo "$a <br>";
    echo "$b <br>"; 
    echo "$c <br>";

    $arrayList = array(0 => "zero", 1 => "dois", 2 => "tres");
    list($a1, $b1, $c1) = $arrayList;
    echo "$a1 <br>";
    echo "$b1 <br>"; 
    echo "$c1 <br>";
?>