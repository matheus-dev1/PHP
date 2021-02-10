<?php
    require "Models/Student.php";
    //Requrimento do Arquivo.

    $students = Student::getAll();
    // Instancia do Objeto

    //$conn = new Connection;
    //echo $conn->getDb();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Recode</title>
    </head>
    <body>
        <?php require "./partials/header.html" ?>
        <?php foreach ($students as $student) {?>
        <main class="py-3" style="height: 90vh; height: auto">
            <div class="card w-50 mx-auto">
                <div class="card-header">
                    <?= $student['name'] ?>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, at provident 
                    doloribus est sed officiis, laborum corporis culpa sunt nam velit, nisi consequatur
                    maiores! Quibusdam officia accusantium nesciunt beatae dicta!
                </div>
                <div class="card-footer d-flex align-items-center justify-content-end">
                    <a class="btn btn-success" type="button" href="https://wa.me/<?=$student['telphone']?>"><i class="fab fa-whatsapp" style="font-size: 24px"></i>&nbsp;<?= $student['telphone'] ?></a>
                </div>
            </div>
        </main>
        <?php 
            }
        ?>
        <!-- 
        <pre>
            <?php print_r($students); ?>
        </pre>
         -->
    </body>
</html>