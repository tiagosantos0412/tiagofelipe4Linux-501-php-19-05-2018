<?php 

	$numero1 = readline('Digite o primeiro numero: ');
	$numero2 = 10;

	$numero1 += $numero2;
	echo 'Adicao: ' . $numero1 . PHP_EOL;

	$numero1 -= $numero2;
	echo 'Subtracao: ' . $numero1 . PHP_EOL;

	$numero1 *= $numero2;
	echo 'multiplicacao: ' . $numero1 . PHP_EOL;

	$numero1 /= $numero2;
	echo 'Divisao: ' . $numero1 . PHP_EOL;
	
	$numero1 %= $numero2; //resto da divisao 
	echo 'Modulo: ' . $numero1 . PHP_EOL;

 ?>