<?php 

	echo "<pre>";

	$pessoas = [

		0 => [
			'nome' => 'Tiago',
			'idade' => 31
		],

		1 => [
			'nome' => 'Jose',
			'idade' => 65
		],

		2 => [
			'nome' => 'Maria',
			'idade' => 22
		]
	];

	print_r($pessoas);


	echo "<hr>";


	foreach($pessoas as $pessoa){
		echo $pessoa['nome'].'<br>';
		echo $pessoa['idade'].'<br>';
		//break;
	}

	echo "<hr>";



 ?>