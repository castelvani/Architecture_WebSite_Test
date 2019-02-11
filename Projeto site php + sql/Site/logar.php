<?php

include 'conexao.php';

if(empty($_POST['email'])||empty($_POST['senha'])){
    header('location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select id, email from usuario where email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $usuario;
    header('location: sistema/index.html');
    exit();
}else{
    header('location: index.php');
    exit();
}
?>
