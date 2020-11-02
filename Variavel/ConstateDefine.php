<?php
    $titulo = 'Utilizando Constantes'; #Declaro o titulo da minha pagina.
    $nome = 'Sandro -$titulo-'; #Declaracao da a Stirng 'Sandro -$titulo-'
    $nascimento = '07/09/1979'; #Declarando a string da data de nascimento.
    $sobre_nome = 'Nobrega Tavares'; #Declarado o nome e sobrenome de uma pesso.
    define('ESTADO', 'Recife'); #Defino que a variavel constante ESTADO recebe o valor fixo "Refice".
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <p><?php echo $nome; ?> <?php echo $sobre_nome; ?>, nascido em <?php echo $nascimento; ?>, nasceu no <?php echo ESTADO; ?></p>
    </body>
</html>