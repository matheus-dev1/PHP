<?php
    #Obs: Esta conversao de valores e chamado typecast

    echo "Usando o Typecast";

    echo "<br>"; echo "<br>";

    $float = 55.1;
    $float = (int) $float;
    echo $float;
    echo " - ";
    echo gettype($float);

    echo "<br>"; echo "<br>";

    $integer = 55;
    $integer = (double) $integer; 
    echo $integer; #Quando eu estou exibindo ele nao esta aparecendo o 55.0, acredito porque como e zero nao
    #nao aparece, mas nos usamo o gettype e vimos que e do tipo float
    echo " - ";
    echo gettype($integer);

    echo "<br>"; echo "<br>";

    $string = "55";
    $string = (int) $string; 
    echo $string; #Quando eu estou exibindo ele nao esta aparecendo o 55.0, acredito porque como e zero nao
    #nao aparece, mas nos usamo o gettype e vimos que e do tipo float
    echo " - ";
    echo gettype($string);

    echo "<br>"; echo "<br>";

    $bolean = true;
    $bolean = (string) $bolean; 
    echo $bolean; #Quando eu estou exibindo ele nao esta aparecendo o 55.0, acredito porque como e zero nao
    #nao aparece, mas nos usamo o gettype e vimos que e do tipo float
    echo " - ";
    echo gettype($bolean);
    
    echo "<br>"; echo "<br>";

    echo "--------------------------";

    echo "<br>"; echo "<br>";

    echo "Usando o SetType";

    echo "<br>"; echo "<br>";

    $float = 55.1;
    settype($float, "int");
    echo $float;
    echo " - ";
    echo gettype($float);

    echo "<br>"; echo "<br>";

    $integer = 55;
    settype($integer, "double");
    echo $integer; #Quando eu estou exibindo ele nao esta aparecendo o 55.0, acredito porque como e zero nao
    #nao aparece, mas nos usamo o gettype e vimos que e do tipo float
    echo " - ";
    echo gettype($integer);

    echo "<br>"; echo "<br>";

    $string = "55";
    settype($string, "int");
    echo $string; #Quando eu estou exibindo ele nao esta aparecendo o 55.0, acredito porque como e zero nao
    #nao aparece, mas nos usamo o gettype e vimos que e do tipo float
    echo " - ";
    echo gettype($string);

    echo "<br>"; echo "<br>";

    $bolean = true;
    settype($bolean, "string"); 
    echo $bolean; #Quando eu estou exibindo ele nao esta aparecendo o 55.0, acredito porque como e zero nao
    #nao aparece, mas nos usamo o gettype e vimos que e do tipo float
    echo " - ";
    echo gettype($bolean);
?>