<?php
include('../assets/functions/connection.php'); 
$aplicacao=isset($_POST['aplicacao']) && !empty($_POST['aplicacao']) ? $_POST['aplicacao'] : '';
$acao=isset($_POST['acao']) && !empty($_POST['acao']) ? $_POST['acao'] : '';
$nome=isset($_POST['nome']) && !empty($_POST['nome']) ? $_POST['nome'] : '';
$descricao=isset($_POST['descricao']) && !empty($_POST['descricao']) ? $_POST['descricao'] : '';
$id=isset($_POST['id']) && !empty($_POST['id']) ? $_POST['id'] : '';

if($aplicacao=='categorias'){
	if($acao=='insert'){
		$sql="insert into categorias(nome,descricao) values('$nome','$descricao')";
		$result=mysqli_query($conn,$sql);
		echo 'inserido';
	}
	if($acao=='update'){
		$sql="update categorias set nome='$nome',descricao='$descricao' where idCategoria='$id'";
		exec_sql($sql,$conn);
		echo 'update';
	}
	if($acao=='delete'){
		$sql="select count(1) from produtos where idCategoria='$id'";
		$dados=lookup_sql($sql,$conn);

		if($dados[0]==0){
			$sql="delete from categorias where idCategoria='$id'";
			exec_sql($sql,$conn);
			echo 'delete';
		}else{
			echo 'error_delete';
		}
	}
}
?>