<!DOCTYPE html>

<?php
require "Models/Student.php";

$TotalStudents = Student::getTotalStudents();
// Instanciando o objeto.
?>
<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Recode Dashboard</title>
    </head>
    <body>
        <?php require "./partials/header.html" ?>
        <main class="py-5" style="height: 90vh; background-color: #ccc; padding-top: 5vh">
            <div class="card d-flex align-items-center mx-auto justify-content-center" style="width: 350px; height: 80vh">
                <canvas id="myChart" width="200" height="200">
                    <!--<canvas> é um elemento HTML que pode ser usado para desenhar usando linguagem de
                    "script" (normalmente JavaScript). Isto pode ser usado, por exemplo, para desenhar
                    gráficos, fazer composições de fotos ou simples (e não tão simples) animações.-->
                </canvas>
            </div>
        </main>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            // A classe Chart recebe dois parametros. O primeiro e a referencia do canvas.
            // E o segundo eh o nosso objeto literal com as configuracoes do nosso grafico.
            type: 'pie', //Temos varios tipos de graficos.
            data: {
                labels: ['Monitores', 'Alunos'],
                datasets: [
                    {
                        data: [70, <?=$TotalStudents[0]['TotalStudents'];?>],
                        backgroundColor: [
                            '#be2121',
                            '#2172be'
                        ]
                    }
                ]
            }
        })
    </script>
</html>