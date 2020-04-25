<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script>
			function apagar(id){				
				if(window.confirm("Confirma a exclusão ? ")){
					window.location = "excluirinscricao.php?id=" + id;
				}				
			}		
		</script>
    </head>
    <body>
        <?php
            include'menu-logado.php';
            include 'conexao.php';
		    $sql = 'select * from inscricao_curso';
		    $query = mysqli_query($con,$sql);
        ?>
        
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Aluno</th>
      <th scope="col">curso</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
	<?php
				$contlin = 2;
				while($reg_cadastro=mysqli_fetch_array($query))
				{
				    $inscricao=$reg_cadastro["idinscricao"];
					$aluno=$reg_cadastro["id_aluno"];
					$curso= $reg_cadastro["id_curso"];
					if($aluno != 0){
					    $sql1 = "select nm_aluno from aluno where idaluno = $aluno";
					    $query1 = mysqli_query($con,$sql1);
					    $reg_cadastro1=mysqli_fetch_array($query1);
					    $aluno1 =$reg_cadastro1['nm_aluno'];
					}
					if($curso != 0){
					    $sql2 = "select ds_curso from curso where idcurso = $curso";
					    $query2 = mysqli_query($con,$sql2);
					    $reg_cadastro2=mysqli_fetch_array($query2);
					    $curso1 =$reg_cadastro2['ds_curso'];
					}
				?>
  </thead>
  <tbody>
    <tr>
<?php
						if($contlin%2 == 0){
						}
							?>
      <td><?php echo $aluno1 ?></td>
      <td><?php echo $curso1 ?></td>
      <td align="center"><a href="editarinscurso.php?id=<?php echo $inscricao ?>" id="linkAltera">Alterar</a>
	<td align="center"><a href="#" id="linkExclui" onclick = "apagar('<?php echo $inscricao?>');">Excluir</td>
    </tr>
  </tbody>
			<?php
				$contlin = $contlin + 1;
				}
			?>
</table>
  </tbody>
</table>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 </body>
<html>