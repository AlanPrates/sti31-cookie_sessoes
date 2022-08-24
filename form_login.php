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
    <!<form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
        </form>
        <form action="" method="post">
            <h2>Area de Login</h2>
            <h4>login de acesso: Alan, Maria e Pedro. Senha para ambas contas: 123</h4>
            <div class="form-group">
                <label>Login</label>
                <input type="text" class="form-control" required="" placeholder="Login para acesso" name="usuario">
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" required="" placeholder="Senha para acesso" name="senha">
            </div>

            <div class="form-group">
                <input type="submit" value="Entrar" class="btn btn-info" name="btEntrar">
                <a href="index.php" class="btn btn-info">Voltar pra pagina inicial</a>
                <a href="questao1.php" class="btn btn-info">Ir pra pagina de cadastro</a>
            </div>
        </form>
</body>

</html>