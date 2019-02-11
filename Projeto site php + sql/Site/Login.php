<!DOCTYPE html>

<html>

    <head>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css">
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
        <form role="form" action="logar.php" method="post">
            <div class="container">

                <label for="email"><b>Email</b></label>

                <input type="text" placeholder="Digite o nome de usuário" name="email" id="txtemail" required>

                <label for="senha"><b>Senha</b></label>

                <input type="password" placeholder="Digite a sua senha" name="senha" id="txtsenha" required>

                <button type="submit">Login</button>
                <a href="index.php"><button type="button" class="cancelarbtn">Cancelar</button></a>
                <label>

                    <input type="checkbox" checked="checked" name="lembrar"> Lembrar

                </label>

            </div>
        </form>

    </body>

</html>