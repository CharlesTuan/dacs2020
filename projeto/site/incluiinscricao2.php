<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de cadastro</title>
	</head>
	<body>
	 <?php
	include 'conexao.php';
	$id 	  = $_GET["id"];
    $idcurso   = $_POST['cbCurso'];
	$idaluno   = $_POST['cbAluno'];
	$sql = "update inscricao_curso set id_aluno = '$idaluno',id_curso='$idcurso' where idinscricao = '$id'";
	
	mysqli_query($con,$sql);
	echo "<script>alert('Registro alterado com sucesso');</script>";
	echo "<script>window.location='consultar.php'</script>";
    ?>
</body>
</html>		
			
			
		