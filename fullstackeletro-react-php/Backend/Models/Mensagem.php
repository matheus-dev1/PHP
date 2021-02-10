<?php

require "../Connection.php";

class Mensagem
{
    public $id;
    public $nome;
    public $email;
    public $assunto;
    public $mensagem;
    public $data_post;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM mensagem");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerMensagem()
    {
        $connection = Connection::getDb();
        
        $stmt = $connection->query("INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('$this->nome', '$this->email', '$this->assunto', '$this->mensagem')");

        // rowCount conta quantas linhas foram afetadas, e ele vai retonar pra nos quantas linhas foram afetas na query acima($stmt);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}