<?php 

	require 'conexao.php';

	$id=  4;

	$query = "DELETE FROM usuarios WHERE id = {$id}";

	echo "<pre>";
	echo $query;
	echo "<br>";

	$result = pg_query($con, $query);

	if($result){
		echo "ok<br>";
	}else {
		echo "Erro ao deletar";
	}


 ?>