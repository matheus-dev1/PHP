<?php
/*
    function fibonacci($qtdFibo){
        $num1 = 0;
        $num2 = 1;
        $soma = 0;
        $qtd = 0;
        if ($qtd === $qtdFibo){
            return $soma;
        }
        else{
            $qtd += + 1;
            $soma = $num1 + $num2;
            $num1 = $num2;
            $num2 = $soma
            return fibonacci($qtdFibo);
        }
    }
    echo fibonacci(13)
*/
?>

<?php
function Fibonacci($number){
    // if and else if to generate first two numbers 
    if ($number == 0){
        return 0;
        //Primeiro Retorno = 0
    }
    else if ($number == 1){
        return 1;
        //Segundo Retorno = 1
    }
    else{
        $resultado = (Fibonacci($number - 1) + Fibonacci($number - 2));
        // Posso fazer tbm return $resultado = (Fibonacci($number - 1) + Fibonacci($number - 2));
        return $resultado;
        //Terceiro REtorno = (2 - 1 = 1) + (2 - 2 = 0) = 1
        //Quarto Retorno = (3 - 1 = 2) + (3 - 2 = 1) = 3
        //Quinto Retorno = (4 - 1 = 3) + (4 - 2 = 2) = 5
        //Sexto retorno = (5 - 1 = 4) + (5 - 2 = 3) = 
    }
}

$number = 13;
for ($counter = 0; $counter < $number; $counter++){
    //0,1,2,3,4,5,6,7,8,9,10,11,12.
    echo Fibonacci($counter),' ';
    //0, 1, 1, 
}
?>
