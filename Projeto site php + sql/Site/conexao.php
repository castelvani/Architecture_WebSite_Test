<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'arq');

//$localhost= "localhost";
//$dbuser="root";
//$dbpassw="";
//$dbname="aulaPHP";

$conexao = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);

if(mysqli_connect_errno())
{
    exit("Erro de conexão com a base dados");
}

