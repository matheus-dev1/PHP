<?php

require "../Models/Mensagem.php";

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api
header("Content-type: application/json"); //Indicação de arquivo JSON

$mensagem = new Mensagem;

$mensagem->nome = $_POST['nome'];
$mensagem->email = $_POST['email'];
$mensagem->assunto = $_POST['assunto'];
$mensagem->mensagem = $_POST['mensagem'];

$validate = $mensagem->registerMensagem();

// Inserir Registro
if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}