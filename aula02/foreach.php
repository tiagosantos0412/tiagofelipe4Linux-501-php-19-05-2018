<?php 

	echo "<pre>";

	$numeros = [1,2,3,4,5];

	print_r($numeros);

 	echo "<hr>";

	foreach($numeros as $chave => $valor){
		echo 'chave '.$chave. ' - '. 'valor '.$valor.'<br>';
		//break;
	}

	echo "<hr>";

	foreach($numeros as $valor){
		echo 'chave '.$chave. ' - '. 'valor '.$valor.'<br>';
		//break;
	}

 ?>