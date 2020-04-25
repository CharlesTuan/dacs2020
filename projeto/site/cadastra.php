<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            $nome = $_POST["nome_cad"];
            $email = $_POST["email_cad"];
            $senha = $_POST["senha_cad"];
            $con = mysqli_connect("localhost","bob","bob","univille");
            $sql = "insert into usuario(nome, email, senha) values('".$nome."','".$email."','".$senha."');";
		    $result = mysqli_query($con,$sql);
		    header('Location: login.php');
        ?>
    </body>
</html>