<?php 

	$nome = readline('Digite o nome do aluno: ');
	$nota = readline('Digite a nota do aluno: ');
	$frequencia = readline('Digite a frequencia do aluno: ');

	switch (true) {
		case ($nota >= 7 && $frequencia >= 8);
		    echo "O aluno {$nome}, esta aprovado" . PHP_EOL;
			break;
		case($nota >= 5 && $frequencia >=8);
			echo "O aluno {$nome}, esta de recuperacao.".PHP_EOL;
			break;
		default:
			echo "O aluno ${nome}, esta reprovado!".PHP_EOL;
			break;
	}


 ?>