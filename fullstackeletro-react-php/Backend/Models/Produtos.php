<?php

require "../Connection.php";

class Produtos
{
    public $id;
    public $data_inclusao;
    public $categoria;
    public $descricao;
    public $preco;
    public $precofinal;
    public $imagem;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}