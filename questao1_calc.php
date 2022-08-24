<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR -->

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   <!--------------------------------------------->
   <title>PHP</title>
</head>

<body>

   <?php
   $corCompleto = $_POST["txtCor"];
   $arvoreCompleto = $_POST["txtArvore"];
   $selEstacaoCompleto = $_POST["selEstacao"];
   

   setcookie("corCompleto", $corCompleto, time() +
      (86400 * 30), "/"); // 86400 = 1 dia em segundos = 24h * 60m
   setcookie("arvoreCompleto", $arvoreCompleto, time() +
      (86400 * 30), "/"); // 86400 = 1 dia em segundos = 24h * 60m
   setcookie("selEstacaoCompleto", $selEstacaoCompleto, time() +
      (86400 * 30), "/"); // 86400 = 1 dia em segundos = 24h * 60m          
 


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

   echo "<h1>Informações registradas com sucesso</h1>";

   ?>
   <form name="formQ1" action="questao2.php" method="post">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">

               <div class="form-group">

                  <div class="form-group">

                     <input type="submit" value="Ir pra pagina de login" class="btn btn-info" name="btEntrar">
                  </div>

               </div>
            </div>
         </div>
   </form>
</body>

</html>