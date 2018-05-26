<?php 


	/*

		Array $pessoa => nome, idade, email
		Exibir na tela o conteudo e a informacao seguindo o exemplo
		Meu nome e $
		Tenho $ anos
		Meu email e $

	*/


	/*

		Array de 3 $pessoas => nome, idade, email
		Exibir na tela o conteudo e a informacao seguindo o exemplo
		Meu nome e $
		Tenho $ anos
		Meu email e $

	*/	

   	
   	echo "<pre>";

   	$pessoa[] = 'Tiago Felipe';
   	$pessoa[] = 31;
   	$pessoa[] = 'tiagosantos0412@gmail.com';

   	//print_r($pessoa);
   	echo "<hr>";

   	echo "Meu nome e {$pessoa[0]}, tenho {$pessoa[1]} e meu email e {$pessoa[2]}";

   	echo "<hr>";

   	//*******************************************************************************************************

   	$pessoas = [

		 [
			'nome' => 'Tiago',
			'idade' => 31,
			'email' => 'tiagosantos0412@gmail.com'
		],

		[
			'nome' => 'Jose',
			'idade' => 65,
			'email' => 'jose1235@gmail.com'
		],

		[
			'nome' => 'Maria',
			'idade' => 22,
			'email' => 'maria741@hotmail.com'
		]
	];

	foreach ($pessoas as $pessoa) {
		echo "<hr>";
		echo 'Meu nome e '.$pessoa['nome']. '<br>';
		echo 'Tenho tenho '.$pessoa['idade'].' anos'.'<br>';
		echo 'Meu email e '.$pessoa['email'].'<br>';
		echo "<hr>";
		
	}


 ?>