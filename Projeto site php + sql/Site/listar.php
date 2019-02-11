<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Admin Theme v3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="sistema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="sistema/css/styles.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="sistema/index.html">Admin</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box-large">
            <div class="container">
                <a href="sistema/signup.php"><button type="button" class="voltar">Cadastrar</a></button>
                <a href="sistema"><button type="button" class="voltar">Voltar</a></button><br>
                <h1>Listar Usuário</h1>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }

                $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;


                $qnt_result_pg = 3;

                $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

                $result_usuarios = "SELECT * FROM usuario LIMIT $inicio, $qnt_result_pg";
                $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
                while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                    echo "ID: " . $row_usuario['id'] . "<br>";
                    echo "Email: " . $row_usuario['email'] . "<br>";
                    echo "Senha: " . $row_usuario['senha'] . "<br>";
                    echo "<a href='../projeto/sistema/alterarTela.php?id=" . $row_usuario['id'] . "'>Alterar</a><br>";
                    echo "<a href='../projeto/sistema/deletar.php?id=" . $row_usuario['id'] . "'>Deletar</a><br><hr>";
                }

                $result_pg = "SELECT COUNT(id) AS num_result FROM usuario";
                $resultado_pg = mysqli_query($conexao, $result_pg);
                $row_pg = mysqli_fetch_assoc($resultado_pg);

                $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

                $max_links = 2;
                echo "<a href='../projeto/listar.php?pagina=1'>Primeira</a> ";

                for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
                    if ($pag_ant >= 1) {
                        echo "<a href='../projeto/listar.php?pagina=$pag_ant'>$pag_ant</a> ";
                    }
                }

                echo "$pagina ";

                for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
                    if ($pag_dep <= $quantidade_pg) {
                        echo "<a href='../projeto/listar.php?pagina=$pag_dep'>$pag_dep</a> ";
                    }
                }

                echo "<a href='../projeto/listar.php?pagina=$quantidade_pg'>Ultima</a>";
                ?>		

            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>


