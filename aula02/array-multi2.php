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

	echo $pessoas[1]['nome'].'<br>';
	echo $pessoas[1]['idade'].'<br>';

	echo "<hr>";

	echo $pessoas[2]['nome'].'<br>';
	echo $pessoas[2]['idade'].'<br>';

	echo "<hr>";

	echo $pessoas[0]['nome'].'<br>';
	echo $pessoas[0]['idade'].'<br>';
 ?>