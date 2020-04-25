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
		$idcurso   = $_POST['cbCurso'];
		$idaluno   = $_POST['cbAluno'];
		$data1      = $_POST['data'];
					  	
		 if(mysqli_query($con,"insert into inscricao_curso(id_curso, id_aluno)
		 values('$idcurso','$idaluno')"))
		 {			
			echo"<script>alert('Inclusão realizada com sucesso');</script>";
			echo"<script>window.location='inscricao.php'</script>"; 			
		 }
		 else
			 
			 echo "<script>alert('Houve um erro na inserção');</script>";
			 echo "Erro: ".mysqli_error($con);
			 
?>
</body>
</html>		
			
			
		