<?php
    /*Criar um arquivo .php para que seja feita uma tabuada com base em um intervalo de valores.
    Ou seja, deverá ser informado o valor inicial e final da tabuada.
    O cálculo deverá ser feito o do valor zero até o valor 10. Contudo, é fundamental que seja exibido
    apenas os valores pares referente ao intervalo de valor imputado.*/
    $valFinal = 11;

    for ($valInicial = 3; $valInicial <= $valFinal; $valInicial += +1)
    {
        for ($contador = 0; $contador <= 10; $contador += + 1)
        if ($valInicial % 2 == 0)
        {
            echo "$valInicial X $contador :".($valInicial * $contador)."<br />";
        }
        echo "<br />";
    }
?>