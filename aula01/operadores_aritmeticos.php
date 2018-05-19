<?php 

	$numero1 = readline('Digite o primeiro numero: ');
	$numero2 = readline('Digite o segundo numero: ');

	$adicao = $numero1 + $numero2;
	$subtracao = $numero1 - $numero2;
	$multiplicacao = $numero1 * $numero2;
	$divisao = $numero1 / $numero2;
	$modulo = $numero1 % $numero2; //resto da divisao 

	echo 'Adicao: ' . $adicao . PHP_EOL;
	echo 'Subtracao: ' . $subtracao . PHP_EOL;
	echo 'multiplicacao: ' . $multiplicacao . PHP_EOL;
	echo 'Divisao: ' . $divisao . PHP_EOL;
	echo 'Modulo: ' . $modulo . PHP_EOL;

 ?>