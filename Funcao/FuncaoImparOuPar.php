<?php
     function imparOuPar($numero)
     {
        if ($numero % 2 == 0)
            {
                return "Par";
            }
        else
        {
            return "Impar";
        }
     }

     echo imparOuPar(547);
?>