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
                <!--FORMULÁRIO DE LOGIN-->
                <div id="login">
                    <form method="post" action="loga.php">
                        <h1>Loga ai</h1>
                        <p>
                            <label for="email_login">Seu e-mail</label>
                            <input id="email_login" name="email_login" required="required" type="text" placeholder="teu emailzinho aqui" />
                        </p>

                        <p>
                            <label for="senha_login">Sua senha</label>
                            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="******" />
                        </p>

                        <p>
                            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                            <label for="manterlogado">isso aqui não funciona(mas ta bonitinho)</label>
                        </p>

                        <p>
                            <input type="submit" value="Logar" />
                        </p>

                        <p class="link">
                            Ainda não tem conta?
                            <a href="cadastro.php">Aqui tu se cadastra</a>
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