<?php
	try {
		$dns = "mysql:dbname=chatsimples;host=localhost";
		$user = "Teste";
		$pass = "";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $error){
		echo "Falha: ". $error -> getMessage();
	}
?>