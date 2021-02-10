<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost;dbname=recode;charset=utf8",
            "Teste",
            ""
        );
        #Primeiro parametro do PDO e o Drive de Conexao com o Banco de Dados. Exemplo MySQL, MongoDB etc.
        if ($conn) {
            return $conn;
        } else {
            return "<h1> Erro ao realizar conexao </h1>";
        }
    }
}
