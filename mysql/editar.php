<?php 

	require 'conexao.php';

	/*

		nome
		email
		senha
	*/


		$id = 4;
		$nome = 'Marcio dos Santos';
		$email = 'marcio.santos@gmail.com';
		$senha = '741@58';

		$query = "UPDATE usuarios SET nome = '{$nome}', email = '{$email}', senha = '{$senha}'
		WHERE id = '{$id}'";

		echo "<pre>";
		echo $query;
		echo "<br>";

		$result = mysqli_query($con, $query);

		if($result){
			echo "ok<br>";
		}else {
			echo "Erro ao editar";
		}

 ?>