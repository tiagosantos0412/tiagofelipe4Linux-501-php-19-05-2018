<?php 

	$opcao = readline('Digite uma opcao: ');
/*
	switch ($opcao) {
		case 1:
			echo "Voce escolheu a opcao 1".PHP_EOL;
			break;
		case 2:
			echo "Voce escolheu a opcao 2".PHP_EOL;
			break;
		case 3:
			echo "Voce escolheu a opcao 3".PHP_EOL;
			break;
		case 4:
			echo "Voce escolheu a opcao 4".PHP_EOL;
			break;
		default:
			echo "ERRO! Opcao invalida!".PHP_EOL;
			break;
	}
*/

	switch (true) {
		case ($opcao > 0  && $opcao <= 5):
			echo "O numero {$opcao}, esta entre 0 e 5".PHP_EOL;
			break;
		case ($opcao > 5  && $opcao <= 10):
			echo "O numero {$opcao}, esta entre 5 e 10".PHP_EOL;
			break;	
		case ($opcao > 10  && $opcao <= 15):
			echo "O numero {$opcao}, esta entre 10 e 15".PHP_EOL;
			break;
		default:
			echo "O numero nao possui referencia...".PHP_EOL;
			break;
	}
?>