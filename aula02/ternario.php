<?php 

	//operador ternario

	$idade = 19;

	if($idade >= 18){
		echo "True".PHP_EOL;
	}else{
		echo "False".PHP_EOL;
	}

	echo PHP_EOL;

	echo ($idade > 18) ? 'True' : 'False'.PHP_EOL;


	echo "Operador elvis".PHP_EOL;

	echo PHP_EOL;

	echo ($idade)?: 'False'.PHP_EOL;
 ?>