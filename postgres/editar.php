<?php 

	require 'conexao.php';

	/*

		nome
		email
		senha
	*/


		$id = 4;
		$nome = 'Joana Pereira da Silva';
		$email = 'jopereira@gmail.com';
		$senha = '9632@5';

		$query = "UPDATE usuarios SET nome = '{$nome}', email = '{$email}', senha = '{$senha}'
		WHERE id = '{$id}'";

		echo "<pre>";
		echo $query;
		echo "<br>";

		$result = pg_query($con, $query);

		if($result){
			echo "ok<br>";
		}else {
			echo "Erro ao editar";
		}

 ?>