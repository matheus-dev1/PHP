<?php
#For Each e basicamente para cada, sendo que eu vou pegar um valor de uma colecao de dados, neste exemplo
#um Array e vou passar cada valor para um variavel e nos podemos trabalhar com este valor individualmente
#durante a execucao do bloco.
  $nomes = ["Pedro", "Antônia", "Beto", "Julia"];
  foreach ($nomes as $nome)
  {
    echo "$nome <br>";
    if ($nome == "Beto")
    {
      break;
    }
  }

  echo "<hr />";

  $numeros = array("pi" => 3.14159, "euler" => 2.71828, "omega" => 1.61803, "raiz de 2" => 1.41421); 
    foreach ($numeros as $chave => $valor)
    #as $chave => $valor (quer dizer que eu estou passando para "$chave" o valor da chave e "=>" o simbolo de
    #igual maior significa que e um valor par-chave e na variavel "$valor" recebe o valor da chave.)
    { 
        echo "$chave. ' é igual a ' .$valor <br>";
    }

    echo "<hr />";

    $contador = 0;
    foreach($numeros as $valor)
    {
      echo array_keys($numeros)[$contador].": $valor <br />";
      $contador += + 1;
    }
?>