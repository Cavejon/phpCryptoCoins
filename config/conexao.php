<?php
	$servidor = "localhost";
	$usuario = "root";
	//$senha = "";//AMBIENTE DE PRODUÇÃO
	$senha = "";//AMBIENTE DE DESENVOLVIMENTO
	$dbname = "usuarios";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	?>
