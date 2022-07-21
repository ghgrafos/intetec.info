<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../public/favicon.ico">

		<title>admin_routes</title>
		<link href="../public/css/bootstrap.css" rel="stylesheet">
		<link href="../public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="../public/css/theme.css" rel="stylesheet">
		<script src="../public/js/ie-emulation-modes-warning.js"></script>
	</head>

<body role="document">
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Dashboard</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="admin_routes.php?link=2">Usuário</a></li>
						<li><a href="admin_routes.php?link=6">Nivel de Acesso</a></li>
						<li><a href="admin_routes.php?link=10">Situação Usuário</a></li>
					</ul>
				</li>
				<li><a href="/home.php">Home</a></li>
			</ul>
			<div class="navbar-form navbar-right">					
				<a href="logout.php"><button type="submit" class="btn btn-success">Sair</button></a>
			</div>
		</div><!--/.nav-collapse -->				
	</div>
</nav>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/public/js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="/public/js/bootstrap.min.js"></script>
		<script src="/public/js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="/public/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>