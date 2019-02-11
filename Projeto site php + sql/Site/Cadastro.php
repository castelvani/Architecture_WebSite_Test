<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link href="css/business-casual.min.css" rel="stylesheet">
        <link href="css/meucss.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="store.php">Projetos</a>
                        </li>
                        <li class="nav-item px-lg-4">

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="Cadastrar.php" method="POST">
            <div class="container">
                <h1>Registre-se</h1>
                <p>Preencha o formulário para criar a sua conta.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Digite o email" name="txtemail" required>

                <label for="senha"><b>Senha</b></label>
                <input type="password" placeholder="Digite a senha" name="txtsenha" required>

                <label for="senha-repetir"><b>Repita a senha</b></label>
                <input type="password" placeholder="Repita a senha" name="senha-repetir" required>

                <label>
                    <input type="checkbox" checked="checked" name="lembrar" style="margin-bottom:15px"> Lembrar
                </label>

                <div class="clearfix">
                    <button type="button" class="cancelarbtn">Cancelar</button>
                    <button type="submit" class="criarbtn">Criar a conta</button>
                </div>
            </div>
        </form>

    </body>
</html>
