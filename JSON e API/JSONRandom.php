<?php

$dados_json = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");
//Consumo os dados desta URL/API em formato JSON.

$dados_json2 = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");
//Consumo os dados desta URL/API em formato JSON.

print($dados_json);
echo "<br>";
print($dados_json2);
//Exibindo JSON

$arrayObject = json_decode($dados_json);
//Quando nao passamos o segundo parametro true ele fica como um array objeto.
//Sempre que trabalhamos com Objetos nos trabalhamos com seta ->

$ArrayAssoc = json_decode($dados_json2, true);
//Quando passamos ele fica como um array normal.

echo "<h1> Array Normal </h1>";

foreach ($ArrayAssoc['value'] as $chave => $valor){
    if ($chave == "id"){
        echo "<h2> $valor </h2>";
    }
    else{
        echo "<h3> $valor </h3>";
    }
}
#Eu tambem posso acessar os valores fazendo assim: $ArrayAssoc['value']['id'] $ArrayAssoc['value']['quote']

echo "<h1> Array Objeto </h1>";

echo "<h2>";
print_r($arrayObject->value->id);
echo "</h2>";

echo "<h3>";
echo $arrayObject->value->quote;
echo "</h3>";
?>