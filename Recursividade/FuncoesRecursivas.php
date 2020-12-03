<?php
function dez($val){
    if ($val !== 0){
        echo $val;
        echo "<br>";
        return dez(--$val);
    }
    else{
        return 0;
    }
}//Uma funcao recursiva e uma funcao que chama ela mesma!
//Normalmente usada em questoes matematicas.

echo "<h1> Reduzindo um numero a ZERO </h1>";
echo dez(100);
?>