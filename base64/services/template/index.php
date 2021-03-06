<?php
require_once 'config/conexao.php';

echo "<h2>TODO</h2><ol>";
foreach($query->query("SELECT title, content, created FROM $todo_list") as $row) {
  echo "<li class=queries>" . $row['title'] . "</li>";
  echo "<li>" . $row['content'] . "</li>";
  echo "<li>" . $row['created'] . "</li>";
}
echo "</ol>";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="public/favicon.ico">

    <title><?php foreach($query->query("SELECT title FROM $todo_list") as $row) {
              echo $row['title'];}
            ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="template1-ligthness">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-navebar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/services"><img src="public/img/menu-logo.png" alt="" /></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="https://intetec.pages.dev/">Portifolioces</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container-content">

      <div class="starter-template">
        <h1 class="queries">
        <?php 
          require_once 'config/conexao.php';
          foreach($query->query("SELECT content FROM $todo_list") as $row) {
              echo  $row['content'];}
        ?>
        </h1>
        <p class="lead"> Davi Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vendor/components/jquery/jquery.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>