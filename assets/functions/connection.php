<?php

$hostname = "localhost";
$bancodedados = "project";
$usuario = "usr_project";
$senha = "dk239#ebk2HD";
//$a = new mysqli($hostname, $usuario, $senha, $bancodedados);
//mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
$conn =mysqli_connect($hostname, $usuario, $senha, $bancodedados);

if (!$conn) {
    echo "Error: Erro de conexão com o Banco de Dados." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}

?>