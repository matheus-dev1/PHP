<?php

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api
header("Content-type: application/json"); //Indicação de arquivo JSON

require "./Models/Student.php";

$students = new Student;

$students->name = $_POST['name'];
$students->telphone = $_POST['telphone'];

$validate = $students->registerStudent();

// Inserir Registro
if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}