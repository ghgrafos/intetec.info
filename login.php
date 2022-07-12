<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gilmar Pimenta - Grafos">
    <link rel="icon" href="public/favicon.ico">

    <title>Intetec.info</title>
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="public/css/signin.css" rel="stylesheet">
    <script src="public/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="valida.php">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="email" name="txt_usuario" id="inputEmail" class="form-control" placeholder="digite o seu email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="digite a sua senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        <p class="text-center text-danger">
          <?php if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset ($_SESSION['loginErro']);
          }?>
        </p>
        <p class="text-center text-success">
          <?php if(isset($_SESSION['loginDeslogado'])){
            echo $_SESSION['loginDeslogado'];
            unset ($_SESSION['loginDeslogado']);
          }?>
        </p>
      </form>
    </div> <!-- /container -->
    <script src="public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>