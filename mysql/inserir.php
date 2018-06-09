<?php 

	require 'conexao.php';

	/*

		nome
		email
		senha
	*/


		$nome = 'Marcio dos Santos';
		$email = 'marcio.santos@gmail.com';
		$senha = '741258';

		$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

		echo "<pre>";
		echo $query;
		echo "<br>";

		$result = mysqli_query($con, $query);

		if($result){
			echo "ok<br>";
		}else {
			echo "Erro ao inserir";
		}

 ?>