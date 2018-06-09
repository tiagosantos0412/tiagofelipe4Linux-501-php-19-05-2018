<?php 

	require 'conexao.php';

	/*

		nome
		email
		senha
	*/


		$nome = 'Joana Pereira';
		$email = 'jopereira@gmail.com';
		$senha = '963258';

		$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

		echo "<pre>";
		echo $query;
		echo "<br>";

		$result = pg_query($con, $query);

		if($result){
			echo "ok<br>";
		}else {
			echo "Erro ao inserir";
		}

 ?>