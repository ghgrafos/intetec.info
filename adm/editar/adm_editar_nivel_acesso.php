<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_niveis_acessos = "SELECT * FROM niveis_acessos WHERE id = '$id' LIMIT 1";
	$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);
	$row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Editar Nivel de Acesso</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="admin_routes.php?link=6"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="processa/adm_proc_edita_nivel_acesso.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_niveis_acessos['nome']; ?>">
			</div>
		</div>
				
		<input type="hidden" name="id" value="<?php echo $row_niveis_acessos['id']; ?>">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Alterar</button>
			</div>
		</div>
	</form>
</div>