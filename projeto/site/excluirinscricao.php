<?php
	include 'conexao.php';
	if(is_numeric($_GET["id"])){
		$sql = "delete from inscricao_curso where idinscricao = ".$_GET["id"];
		mysqli_query($con,$sql);
		if(mysqli_affected_rows() >=0){
			echo"<script>alert('Registro apagado com sucesso');</script>";
			echo"<script>window.location='consultar.php'</script>";
			}
	}