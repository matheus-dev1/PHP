<?php
       $diasemana = "2"; 
        
        switch($diasemana) 
        { 
            case"0": 
            #Se a variavel $diasemana for 0 entao ele ira atribuir o valor de "Domindo" e vai parar o switch case
                $diasemana = "Domingo"; 
                break; 
            case"1": 
                $diasemana = "Segunda Feira";
                break; 
            case"2": 
                $diasemana = "Terça Feira";
                break; 
            case"3": 
                $diasemana = "Quarta Feira"; 
                break; 
            case"4": 
                $diasemana = "Quinta Feira";
                break; 
            case"5": 
                $diasemana = "Sexta Feira";
                break; 
            case"6": 
                $diasemana = "Sabado"; 
                break; 
            default:
                $diasemana = "Dia invalido";
                break;
        } 
    echo $diasemana; #Exibir o dia ou a mensagem de erro.
?>