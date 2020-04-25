<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include'menu-logado.php';
            include 'conexao.php';
        ?>
	
	<body id="corpo">		
		<form name="frmInsCurso" id="frmInsCurso" method="post"  action="incluiinscricao.php" onSubmit="return validaCampoUsuario();">
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
			<input type="submit" value="Cadastrar" id="botao_cadastrar" />	
			
		</form>
	</body>
</html>

