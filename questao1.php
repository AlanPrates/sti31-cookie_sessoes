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
    <form name="formQ1" action="questao1_calc.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Preencha o formulario abaixo:</h2>
                    <div class="form-group">
                        <label>Cor preferida</label>
                        <input type="text" class="form-control" required="" placeholder="Cor preferida" name="txtCor"
                            value="">
                    </div>

                    <div class="form-group">
                        <label>Arvore preferida</label>
                        <input type="text" class="form-control" required="" placeholder="Arvore preferida"
                            name="txtArvore" value="">
                    </div>

                    <div class="form-group">
                        <label>Estação do ano preferida</label>
                        <select name="selEstacao" value=" <?php echo $selEstacaoCompleto; ?> " class="form-control">
                            <option value="Outono">Outono</option>
                            <option value="Inverno">Inverno</option>
                            <option value="Primavera">Primavera</option>
                            <option value="Verão">Verão</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <input type="submit" value="Gravar informações" class="btn btn-info" name="btGravar">
                        <a href="index.php" class="btn btn-info">Voltar pra pagina inicial</a>
                        <a href="questao2.php" class="btn btn-info">Ir pra pagina de login</a>
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>