<?php 


	/*

		CLI
		Ler informacoes de uma pessoa
		Armazenar as informacoes em um array
		exibir as informacoes vindas do array
		Nome, Idade, Email, Empresa;

	*/
		echo "Entre com o nome: ".PHP_EOL;
		$funcionario[0] = readline();
		echo "Entre com a idade: ".PHP_EOL;
		$funcionario[1] = readline();
		echo "Entre com o email: ".PHP_EOL;
		$funcionario[2] = readline();
		echo "Entre com a empresa: ".PHP_EOL;
		$funcionario[3] = readline();

		echo $funcionario[0].PHP_EOL;
		echo $funcionario[1].PHP_EOL;
		echo $funcionario[2].PHP_EOL;
		echo $funcionario[3].PHP_EOL;
		
		echo "****************************************************************************************".PHP_EOL;
	/*	
		echo "Entre com o nome: ".PHP_EOL;
		$funcionario['nome'] = readline();
		echo "Entre com a idade: ".PHP_EOL;
		$funcionario['idade'] = readline();
		echo "Entre com o email: ".PHP_EOL;
		$funcionario['email'] = readline();
		echo "Entre com a empresa: ".PHP_EOL;
		$funcionario['empresa'] = readline();

	*/
 ?>