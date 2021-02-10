<?php

require "../Connection.php";

class Pedidos
{
    public $id;
    public $nome;
    public $endereco;
    public $telefone;
    public $produto;
    public $valor_uni;
    public $qtd_produto;
    public $valor_total;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM pedidos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerPedido()
    {
        $connection = Connection::getDb();

        $this->valor_total = $this->valor_uni * $this->qtd_produto;
        
        $stmt = $connection->query("INSERT INTO pedidos (nome_cli, endereco, telefone, produto, valor_uni, qtd_prod, valor_total) VALUES ('$this->nome', '$this->endereco', '$this->telefone', '$this->produto', '$this->valor_uni', '$this->qtd_produto', '$this->valor_total')");

        // rowCount conta quantas linhas foram afetadas, e ele vai retonar pra nos quantas linhas foram afetas na query acima($stmt);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}