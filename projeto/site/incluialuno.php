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
		$nome      = $_POST['campoNome'];
		$endereco  = $_POST['campoEndereco'];
		$cidade    = $_POST['campoCidade'];
		$estado    = $_POST['cbEstado'];
		$email     = $_POST['campoEmail'];
		$cpf	   = $_POST['campoCpf'];	
		$celular   = $_POST['campoCelular'];	
					  	
		 mysqli_query($con,"insert into aluno(nm_aluno, ds_endereco,ds_cidade, ds_uf,ds_email,nr_celular,nr_cpf)
		 values('$nome','$endereco','$cidade','$estado','$email','$celular','$cpf')");	
		
		echo"<script>alert('Inclusão realizada com sucesso');</script>";
		echo"<script>window.location='cadastroaluno.php'</script>"		
		
?>
</body>
</html>		
			
			
		