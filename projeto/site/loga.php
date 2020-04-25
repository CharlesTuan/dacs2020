<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        
            $email = $_POST["email_login"];
            $senha = $_POST["senha_login"];
            
            
            include 'conexao.php';
            
            
            $result = mysqli_query($con,"select id_usuario from usuario where email = '$email' and senha = '$senha'");
            if(mysqli_num_rows($result) > 0){
		        header('location:consultar.php');
	        }
            else{
		        header('location:login.php');
		    }
		    
        ?>
    </body>
</html>