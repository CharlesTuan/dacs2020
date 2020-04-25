<html lang="pt-br">
	<head>
		<title>Formulário de edição</title>
		<link href="style.css" rel="stylesheet" type="text/css"/>	
		<meta charset="utf-8">	
	</head>
	<body id="corpo">	
		<?php
            include'menu-logado.php';
            include 'conexao.php';
            $inscricao = $_GET["id"]
        ?>
		
	<form name="frmInsCurso" id="frmInsCurso" method="post"  action="incluiinscricao2.php?id=<?php echo $inscricao ?>" onSubmit="return validaCampoUsuario();">
			<label for="campoNome" style="color:black;">
				Aluno:
				<select name = "cbAluno" id="cbAluno">
					<option value = "0">--Selecione--</option>
					<?php
						$sql = 'select * from aluno order by nm_aluno desc';
						$query = mysqli_query($con,$sql);
						while($exibir = mysqli_fetch_array($query)){
							?>
							<option value = "<?php echo $exibir["idaluno"];?>"><?php echo $exibir["nm_aluno"];?></option>
						<?php
						}
						?>
				</select>
			</label>
			<label for="campoDscurso"style="color:black;">
				Curso:
				<select name = "cbCurso" id="cbCurso">
					<option value = "0">--Selecione--</option>
					<?php
						$sql = 'select * from curso order by ds_curso desc';
						$query = mysqli_query($con,$sql);
						while($exibir = mysqli_fetch_array($query)){
							?>
							<option value = "<?php echo $exibir["idcurso"];?>"><?php echo $exibir["ds_curso"];?></option>
						<?php
						}
						?>
				</select>		
			</label>
			<input type="submit" value="Cadastrar" id="botao_cadastrar" />	
			
		</form>
	</body>
</html>	