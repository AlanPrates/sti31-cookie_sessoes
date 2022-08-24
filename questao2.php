<?php
include_once 'dados_login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <div class="container">
        <?php
        if (!$_SESSION['logged']) {
            include_once "form_login.php";
        } else {
            include_once "conteudo_restrito.php";
        }
        ?>
    </div>
</body>

</html>