<?php
include('../assets/functions/connection.php'); 
$aplicacao=isset($_POST['aplicacao']) && !empty($_POST['aplicacao']) ? $_POST['aplicacao'] : '';
$acao=isset($_POST['acao']) && !empty($_POST['acao']) ? $_POST['acao'] : '';
$nome=isset($_POST['nome']) && !empty($_POST['nome']) ? $_POST['nome'] : '';
$descricao=isset($_POST['descricao']) && !empty($_POST['descricao']) ? $_POST['descricao'] : '';

if($aplicacao=='categorias'){
	if($acao=='insert'){
		$sql="insert into categorias(nome,descricao) values('$nome','$descricao')";
		$result=mysqli_query($conn,$sql);
		echo 'inserido';
	}
}
?>