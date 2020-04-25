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
        <form name="frmCadCurso" id="frmCadCurso" method="post"  action="incluicurso.php" onSubmit="return validaCampoUsuario();">
			<label for="campoDscurso" style="color:black;">	       
				Curso: <input type="text" name="campoDscurso" id="campoDscurso" placeholder="Informe o curso" required />
			</label>
			<label for="campoVlCargaHor" style="color:black;">
				Carga Horária: <input type="text" name="campoVlCargaHor" id="campoVlCargaHor" placeholder="Informe a carga horária" required />
			</label>						
			
			<input type="submit" value="Cadastrar" id="botao_cadastrar"/>
		</form>
	</body>
</html>	