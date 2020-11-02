<?php
    /* Um array pode ser tanto uma Lista(python) como um dicionario(python).*/
    $nomes = ["Matheus", "Julia", "Ramon", "Gabriel"]; #Lista
    print_r($nomes); //TEmos que usaro print_r() para exibir porque assim ele exibe a mensagem de fora "pura".
    echo "<br />";
    echo "Indice 03: ".$nomes[2]."<br />";

    $nomes2 = array("Carlos", "Cesar", "Henrique", "Bia");
    print_r($nomes2);
    echo "<br />";
    echo "Indice 04: ".$nomes2[3]."<br />";

    $nomes3 = array( #Dicionario
        "Matheus" => 21,
        "Carol" => 32,
        "Ana" => 44,
        "Vitor" => 23,
        //Eu posso definir o valor em que eu quero que ele inicie, e entao os proximo valores irao seguir os
        #numeros na sequencia logica.
        "idosos" => array(
            "Carlos" => 74,
            "Orlando" => 88,
            "Gilmar" => 91,
            "Osmar" => 101
        )
    );
    echo "<br />";
    echo "Nome do Idoso 2: ".$nomes3["idosos"]["Orlando"]."<br /> <br />";
    echo count($nomes3);
?>