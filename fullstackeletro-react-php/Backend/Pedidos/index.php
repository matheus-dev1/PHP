<?php

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api
header("Content-type: application/json"); //Indicação de arquivo JSON

require '../Models/Pedidos.php';

$pedidos = Pedidos::getAll();

print_r(json_encode($pedidos));

// Nos podemos usar qualquer linguagem de backend com uma linguagem de react por exemplo porque nos temos o json pra ser a nossa tranferencia de dados universal, e o nosso backend fica responsavel apenas por passar ele para nos, fazer a conexao com banco de dados e processamento de infomacoes para apenas passar para o front.