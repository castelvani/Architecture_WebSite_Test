<?php


    require_once 'conexao.php';
    
    $email = $_POST['txtemail'];
    $senha=$_POST['txtsenha'];
    
    $sql = "INSERT INTO usuario (email,senha) VALUES ('$email','$senha')";
    
    if(mysqli_query($conexao, $sql))
    {
        echo 'Cliente cadastrado com sucesso!!!';
        header("Location: listar.php");
    }
    else 
    {
        echo "Error".$sql."<br>".mysqli_error($conexao);
    }

?>