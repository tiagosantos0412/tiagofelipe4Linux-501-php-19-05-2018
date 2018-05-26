<?php 


/* Receber 2 valores em uma variavel opcao
	Caso a opcao seja 1 somar os dois numeros e mostrar o resultados
	Caso a opcao seja 2 subtrair os dois numeros e mostrar o resultados
	Caso a opcao seja 3 multiplicar os dois numeros e mostrar o resultados
	Caso a opcao seja 4 dividir os dois numeros e mostrar o resultados
*/


	$n1 = readline('Entre com o primeiro numero: ');
	$n2 = readLine('entre com o segundo numero: ');
	$opcao = readLine("Escolha uma opcao: (+ somar, - subtrair, * multiplicar e / dividir)...");
	$resultado;

	switch ($opcao) {
		case '+':
			$resultado = $n1 + $n2;
			echo "A soma de {$n1} e {$n2} e: {$resultado}".PHP_EOL;
			break;
		case '-':
			$resultado = $n1 - $n2;
			echo "A subtracao de {$n1} e {$n2} e: {$resultado}".PHP_EOL;
			break;
		case '*':
			$resultado = $n1 * $n2;
			echo "A multiplicacao de {$n1} e {$n2} e: {$resultado}".PHP_EOL;
			break;
		case '/':
			$resultado = $n1 / $n2;
			echo "A divisao de {$n1} e {$n2} e: {$resultado}".PHP_EOL;
			break;	
		default:
			echo "ERRO! Opcao invalida".PHP_EOL;
			break;
	}


 ?>