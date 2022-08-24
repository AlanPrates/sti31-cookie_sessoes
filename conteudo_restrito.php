<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>EXERCÍCIOS PRÁTICOS SOBRE PHP</title>

    <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!--------------------------------------------->
</head>

<body>

    <?php
    include_once 'dados_login.php';
    $logged = $_SESSION['logged'] ?? NULL;


    $corCompleto = "";
    $arvoreCompleto = "";
    $selEstacaoCompleto = "";

    if (isset($_COOKIE["corCompleto"])) {
        $corCompleto = $_COOKIE["corCompleto"];
    }

    if (isset($_COOKIE["arvoreCompleto"])) {
        $arvoreCompleto = $_COOKIE["arvoreCompleto"];
    }

    if (isset($_COOKIE["selEstacaoCompleto"])) {
        $selEstacaoCompleto = $_COOKIE["selEstacaoCompleto"];
    }

    ?>
    <form name="formQ1" action="questao2.php" method="post">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Seja Bem Vindo usuario (a).</h2>
                    <div class="form-group">
                        <p><?php echo "Olá    " . $_SESSION['usuario'] . '.'; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Sua cor preferida é</label>
                        <input type="text" class="form-control" name="txtCor" value="<?php echo $corCompleto; ?>">
                    </div>

                    <div class="form-group">
                        <label>Arvore preferida</label>
                        <input type="text" class="form-control" name="txtArvore" value="<?php echo $arvoreCompleto; ?>">
                    </div>

                    <div class="form-group">
                        <label>Estação do ano preferida</label>
                        <input name="selEstacao" value=" <?php echo $selEstacaoCompleto; ?> " class="form-control">
                        </input>
                    </div>

                    <div class="form-group">
                        <a href="?logout=1" class="btn btn-info" name="btEntrar">Encerrar sessão</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </form>

</body>

</html>