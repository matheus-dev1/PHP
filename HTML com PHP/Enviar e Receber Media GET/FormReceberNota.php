O aluno 
<?php echo $_GET['nome']?> 
<?php 
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $media = ($nota1 + $nota2) / 2;
    if ($media >= 7)
    {
        echo " foi Aprovado com $media";
    }
    else if ($media >= 4 and $media <=6)
    {
        echo " esta de Recuperacao com $media";
    }
    else if ($media <= 3)
    {
        echo " foi Reprovado com $media";
    }
?>