<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
      include'menu.php';
    ?>
        <div class="container">
            <a class="links" id="paracadastro"></a>
            <a class="links" id="paralogin"></a>
            <div class="content">
                <!--FORMULÁRIO DE CADASTRO-->
                <div id="cadastro">
                    <form method="POST" action="cadastra.php">
                        <h1>cadastra ai</h1>
                        <p>
                            <label for="nome_cad">Seu nome</label>
                            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="teu nominho ai" />
                        </p>
                        <p>
                            <label for="email_cad">Seu e-mail</label>
                            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="teu emailzinho ai" />
                        </p>
                        <p>
                            <label for="senha_cad">Sua senha</label>
                            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="tua senhazinha ai" />
                        </p>
                        <p>
                            <input type="submit" value="Cadastrar" />
                        </p>
                        <p class="link">
                            Já tem conta?
                            <a href="login.php"> Loga aqui então </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>