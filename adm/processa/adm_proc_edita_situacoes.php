<?php
	include_once("../../conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	
	$result_situacoes = "UPDATE situacoes SET nome='$nome', modified =  NOW() WHERE id = '$id'";
	
	$resultado_situacoes = mysqli_query($conn, $result_situacoes);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://192.168.1.3/adm/admin_routes.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Situação alterada com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://192.168.1.3/adm/admin_routes.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Situação não foi alterada com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>