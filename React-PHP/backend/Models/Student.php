<?php

require "Connection.php";

class Student
{
    public $id;
    public $name;
    public $telphone;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerStudent()
    {
        $connection = Connection::getDb();
        
        $stmt = $connection->query("INSERT INTO students (name, telphone) VALUES ('$this->name', '$this->telphone')");

        // rowCount conta quantas linhas foram afetadas, e ele vai retonar pra nos quantas linhas foram afetas na query acima($stmt);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}