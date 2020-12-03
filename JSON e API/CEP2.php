<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busque seu CEP2!</title>
</head>
<body>
    <form action="" method="GET">
        <input type="number" id="cep" name="cep" value="" placeholder="Digite o seu CEP: ">
        <button type="submit">Enviar</button>
    </form>

    <?php
    $cep = $_GET['cep'];
    //Para CEP ou CPF ou qualquer outro numero que possa iniciar um um ZERO(0) faca como STRING.

    $cepUser = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    //ws = web service

    $cepArray = json_decode($cepUser, true);
    
    unset($cepArray['ibge'], $cepArray['siafi'], $cepArray['gia']);
    
    echo "<pre>";
    print_r($cepArray);
    echo "</pre>";

    $cepJSON = json_encode($cepArray, JSON_PRETTY_PRINT);

    echo "<pre>" . $cepJSON . "</pre>";
    ?>
</body>
</html>