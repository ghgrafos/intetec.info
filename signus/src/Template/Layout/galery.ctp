<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <base href="/">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Galeria Signus</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		
		<link rel='stylesheet' href='libs/unitegallery/dist/css/unite-gallery.css' type='text/css' /> 
		<link rel='stylesheet' href='libs/unitegallery/dist/themes/default/ug-theme-default.css' type='text/css' /> 

		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid  text-center">
			<div class="row">
				<div class="col-md-12">

					<h2 class="logo"> <small>Galeria de Imagens</small></h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<nav>
                        <ul class="nav">
                            <?php foreach ($categories as $category): ?>
								<li><a href="" class="category-link" data-target="<?php echo $category->slug;?>">
								<?php echo $category->title;?></a></li>
							<?php endforeach; ?>
                            <li><a href="" class="category-link all">Mostrar todos</a></li>
                        </ul>
                </nav>
				</div>
			</div>
		</div>
		

		<div id="gallery" style="display:none;">
		
        <?php echo $this->fetch('content');?>

		<footer class="text-center">www.WebDevBr.com.br</footer>

		<script src="libs/jquery/dist/jquery.min.js"></script>
		<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
	
		<script type='text/javascript' src='libs/unitegallery/dist/js/unitegallery.js'></script> 
		<script type='text/javascript' src='libs/unitegallery/dist/themes/tiles/ug-theme-tiles.js'></script>

		<script src="js/script.js"></script>
	</body>
</html>