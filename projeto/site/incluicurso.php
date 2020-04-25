<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de cadastro</title>
	</head>
	<body>
	  <?php
		include 'conexao.php';
		//Passando os dados que estão no formulário para as variáveis abaixo
		$curso      = $_POST['campoDscurso'];
		$cargahor   = $_POST['campoVlCargaHor'];		
					  	
		 if(mysqli_query($con,"insert into curso(ds_curso, vl_cargahoraria)
		 values('$curso','$cargahor')"))
		 {	
		
			echo"<script>alert('Inclusão realizada com sucesso');</script>";
			echo"<script>window.location='cadastrocurso.php'</script>"; 			
		 }
		 else
			 
			 echo "<script>alert('Houve um erro na inserção');</script>";
			 echo "Erro: ".mysqli_error($con);
			 
?>
</body>
</html>		
			
			
		