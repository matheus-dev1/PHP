
<?php
    session_start();

    $_SESSION['id'] = "";
    $_SESSION['email'] = "";
    $_SESSION['nome'] = "";

    session_destroy();

    header('Location: ../index.php');
?>