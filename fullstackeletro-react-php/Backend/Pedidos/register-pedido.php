<?php

require "../Models/Pedidos.php";

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api
header("Content-type: application/json"); //Indicação de arquivo JSON

$pedido = new Pedidos;

$pedido->nome = $_POST['nome'];
$pedido->endereco = $_POST['endereco'];
$pedido->telefone = $_POST['telefone'];
$pedido->produto = $_POST['produto'];
$pedido->valor_uni = $_POST['valor_uni'];
$pedido->qtd_produto = $_POST['qtd_produto'];

$validate = $pedido->registerPedido();

// Inserir Registro
if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}