<?php
	include_once("../../conexao.php");
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	
	$result_niveis_acessos = "INSERT INTO niveis_acessos (nome, created) VALUES ('$nome', NOW())";
	$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://192.168.1.3/adm/admin_routes.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Nivel de Acesso cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://192.168.1.3/adm/admin_routes.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Nivel de Acesso não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>