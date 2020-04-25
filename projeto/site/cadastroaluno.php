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
        <form name="frmCadAluno" id="frmCadAluno" method="post"  action="incluialuno.php" onSubmit="return validaCampoUsuario();">
			<label for="campoNome" style="color:black;">	       
				Nome: <input type="text" name="campoNome" id="campoNome" placeholder="Informe o nome" required />
			</label>
			<label for="campoEndereco" style="color:black;">
				Endereço: <input type="text" name="campoEndereco" id="campoEndereco" placeholder="Informe o Endereço" required />
			</label>			
			<label for="campoCidade" style="color:black;">
				Cidade: <input type="text" name="campoCidade" id="campoCidade" placeholder="Informe a cidade" required />
			</label>			
			<label for="campoUf" style="color:black;">
				Uf: 
				  <select name="cbEstado" id="cbEstado">
					<option value = "0">Selecione o estado</option>
					<option value = "sc">Santa Catarina</option>
					<option value = "pr">Paraná</option>
					<option value = "sp">São Paulo</option>
					<option value = "rj">Rio de Janeiro</option>
					<option value = "rs">Rio Grande do Sul</option>
					<option value = "ce">Ceará'</option>
				 </select>
			</label>
			
			<label for="campoEmail" style="color:black;">
				e-mail:<input type="text" name="campoEmail" id="campoEmail" placeholder="Informe o e-mail" required />
			</label>

			<label for="campoCpf" style="color:black;">
				Nr cpf:<input type="text" name="campoCpf" id="campoCpf" placeholder="Informe o nr do cpf" required />
			</label>
			<label for="campoCelular" style="color:black;">
				Nr Celular:<input type="text" name="campoCelular" id="campoCelular" placeholder="Informe o nr celular" required/>
			</label>	
			
			<input type="submit" value="Cadastrar" id="botao_cadastrar"/>
		</form>
	</body>
</html>	