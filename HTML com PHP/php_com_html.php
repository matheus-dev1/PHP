<?php
    $tituloHTML = "<title> Titulo com PHP </title>";
    $metaLang = '<meta lang="pt-br">';
    $metaCharset = '<meta charset="utf-8">';
    $paragrafoPHP = "Ola, estamos testando um paragrafo com PHP. <br> Esta e uma parte importante do 
    <strong> desenvolvimento PHP. </strong>";
    $paragrafoPHP2 = "<center> Neste nosso segundo paragramos nos vamos 
    <strong> centralizar </strong> este texto. </center>";
?>
<!DOCTYPE html>

<html>
    <head>
        <?php print($metaLang);?>
        <?php print($metaCharset);?>
        <?php print($tituloHTML);?>
        <!--Nos temos que dar o print para que passe para o arquivo HTML.-->
    </head>
    <body>
        <?php print($paragrafoPHP); ?>
        <?php print($paragrafoPHP2); ?>
    </body>
</html>