<?php 

	echo "<pre>";
	//array associativo

	$pessoa = [
		'nome' => 'Tiago',
		//0 => 'Tiago',
		'idade' => 31,
		//1 => 31,
		'email' => 'tiagosantos0412@gmail.com',
		//2 => 'tiagosantos0412@gmail.com',
		'altura' => 1.76
		//3 => 1.76
	];

	print_r($pessoa);

	echo "<hr>";


	foreach($pessoa as $chave => $valor){
		echo 'chave '.$chave. ' - '. 'valor '.$valor.'<br>';
		//break;
	}

	echo "<hr>";


	foreach($pessoa as $valor){
		echo 'valor '.$valor.'<br>';
		//break;
	}
 ?>