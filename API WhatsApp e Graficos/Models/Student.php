<?php

require "Connection.php";
//Nos fazemos o require sem o ../ porque nos vamos chamar este arquivo so no arquivo index.php que nao
//precisaria de ../ entao e como se o arquivo estivesse no mesmo local que o index.php

class Student//Todos os models devem estar no singular.
{
    public $id;
    public $name;
    public $telphone;
    //Devo definir os atributos igual as colunas da minha tabela.
    //Um model e a abstracao desta tabela em banco de dados em formatado de classe em php.

    public static function getAll()
    {
        //Recuperar todos os registros da tabela students.
        //SELECT * FROM students
        #$conn = new Connection;
        //Instanciando o objeto.
        #$connection = $conn->getDb();
        //Esecutando o metodo getDb() e armazenando o retorno em $connection.

        $connection = Connection::getDb();
        //$connection(variavel onde sera armazenado) = Connection(Instancia do objeto)::getDb();(Executando a funcao getDb();)
        //O nosso metodo tem que ser static

        $stmt = $connection->query("SELECT * FROM students");
        //Statement
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Array da consulta. Retornando apenas indeces associativos.
        // FETCH_NUM me retorna um array apenas numerico.
        // Se eu deixar em branco ele me retorna tanto numerico como Array.
    }

    public static function getTotalStudents()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT COUNT(*) AS TotalStudents FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function registerStudent()
    {
        //INSERT INTO students values ("Matheus", 5511969699509)
    }

    public function deleteStudent()
    {
        //DELETE FROM students WHERE 
    }

    public function updateStudent()
    {
        // UPDATE students SET nome = "Matheus", telphone = "5511969699509" WHERE id = 1
    }

    //M = Movels = Relacionado a Banco de Dados
    //V = Views = Apenas coisas que sao visiais, sao paginas por exemplo.
    //C = Controllers = Intermediario entre views e models. Regras da Aplicacao.
    //Obs: A view apenas se relaciona com o Controller
}