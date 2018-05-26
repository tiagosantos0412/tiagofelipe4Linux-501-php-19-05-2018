<?php 

	/*

		CLI
		NOTA - DIGITE A SUA NOTA
		FREQUENCIA - DIGITE A SUA FREQUENCIA
		SE ESTA APROVADO
		SE ESTA EM RECUPERACAO
		SE ESTA REPROVADO

		APROVADO NOTA >= 7 E FREQUENCIA >= 8
		RECUPERACAO - NOTA >= 5 OU NOTA < 7 E FREQUENCIA >= 8
		REPROVADO - NOTA < 5 OU FREQUENCIA < 8
	*/



	$nome = readline('Digite o nome do aluno: ');
	$nota = readLine('Digite a nota do aluno: ');
	$frequencia = readLine('Digite a frequencia do aluno: ');


	if ($nota >= 7 && $frequencia >= 8) {
				
		}	else if (($nota >= 5 || $nota < 7) && ($frequencia >= 8)) {
				echo "O aluno {$nome} esta de recuperacao." . PHP_EOL;
		} else{
			echo "O aluno {$nome}, esta reprovado!" . PHP_EOL;
		}


 ?>