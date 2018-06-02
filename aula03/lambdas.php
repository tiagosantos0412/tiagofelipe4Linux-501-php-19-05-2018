<?php 
	echo "<pre>";
	//Lambdas funcoes anonimas
   //function nomeFunction(){}

	$funcao = function($nome){
		echo "Func Anonimo - " . $nome;
	};

	//var_dump($funcao);

	$funcao('Tiago');

	echo "<br>";

	$funcao = 'outra coisa';

	var_dump($funcao);

	echo "<hr>";

	//************************************************************************************************


	$nomes = ['Tiago', '4Linux', 'Maria', 'Jose'];

	function encontraMaria($nome){
		if($nome == 'Maria'){
			return $nome;
		}
	}	

	$encontrado = array_filter($nomes, 'encontraMaria');

	print_r($encontrado);

	echo "<hr>";

	//************************************************************************************************

	$encontrado = array_filter($nomes, function($nome){
		if($nome == '4Linux'){
			return $nome;
		}
	});

	print_r($encontrado);

	

 ?>