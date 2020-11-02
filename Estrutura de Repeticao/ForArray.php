<?php
    $nomes = ["Pedro", "Antônia", "Beto", "Julia"];
    
    for ($contador = 0; $contador < count($nomes); $contador++)
    #Enquanto o contador for menor que a quantidade de nomes execute o bloco.
    {
        echo $nomes[$contador];
        echo "<br>";
    }
?>

