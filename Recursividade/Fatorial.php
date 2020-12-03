<?php

//Fatorial de 4 = 4 * 3 * 2 * 1 = ?
//Fatorial de 2 = 2 * 1 = 2
//Fatorial de 3 = 3 * 2 * 1 = 6

function fatorial ($num){
    if ($num <= 1){
        return $num;
    }
    else{
        return $total = $num * fatorial($num - 1);
        //A cada chamada a funcao dentro da funcao sera reduzida um na variavel num que e a "MULTIPLICADO"
        //e o "MULTIPLICADOR".
    }
}

function fatorialNormal ($numero){
    $resultado = 1;
    while ($numero >= 1){
        $resultado = $resultado * $numero;
        //Resultado vezes o numero em que a gente usuario colocou, sendo que no final do bloco,
        //este valor e reduzido em 1.
        echo $resultado."<br>";
        $numero--;
        //Na programacao em um fatorial nos comecamos do 1 ate o ultimo valor do numero...
    }
    return $resultado;
}
echo 'Fatorial Recusivo';
echo fatorial(9);
echo "<br>";
echo "Fatorial Normal";
echo fatorialNormal(9);
?>