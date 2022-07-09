<?php
	$servidor = "localhost";
	$usuario = "vmx";
	$senha = "123456";
	$dbname = "vmx_testes_db";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso <br>";
	}
?>
