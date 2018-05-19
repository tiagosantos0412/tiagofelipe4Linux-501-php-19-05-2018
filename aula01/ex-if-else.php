<?php 

	/*

		CLI
		RECEBER IDADE
		EXIBIR VOCE E MAIOR DE IDADE
		SENAO
		EXIBIR VOCE E MENOR DE IDADE

	*/

	$nome = readline('Digite o seu nome: ');
	$idade = readline('Digite a sua idade: ');

	if($idade >= 18){
		echo $nome . ' voce é maior de idade' . PHP_EOL;
	} else {
		echo "{$nome}, voce é menor de idade" . PHP_EOL;
	}

 ?>