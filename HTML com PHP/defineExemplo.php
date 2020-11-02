 <?php
    define("TITULO", "<title> Trabalhando com Constantes </title>");
    define("NOME", "Matheus");
    define("IDADE", 21);
 ?>
 <!DOCTYPE html>

 <html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <?php echo TITULO; ?>
    </head>
    <body>
        <p>Ola eu sou o <?php echo NOME; ?> e eu tenho <?php echo IDADE; ?> anos!</p>
    </body>
 </html>