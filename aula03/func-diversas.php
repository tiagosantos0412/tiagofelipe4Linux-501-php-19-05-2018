<?php 
	echo "<pre>";
	//verifica se a variavel esta setada

	$nome = 'nome';
	if (isset($nome)){
		echo "Nome existe!";
	}else {
		echo "Nome nao existe!";
	}
 		
 	//**************************************************************************************************

	//verifica se existe um indice no array

	echo "<br>";

	$arr = ['nome' => 'Tiago'];

	if (isset($arr['nome'])) {
		echo "existe o indice";
	} else {
		echo "nao existe o indice";
	}


	echo "<hr>";

	//**************************************************************************************************

	//destroi variavel
	$var = 'asdf';
	unset($var);
	echo (isset($var)) ? 'existe' : 'nao existe';

	echo "<hr>";

	//**************************************************************************************************

	//verifica se a variavel esta vazia

	//considerados vazio: 0, '', false, [], null
	$var = '';

	echo (empty($var)) ? 'vazio' : 'nao vazio';
	echo "<hr>";

	//**************************************************************************************************

	//verifica se var e do tipo especifico

	if(!is_array($var)){
		echo "nao e um array";
	}else {
		echo "e um array";
	}
	echo "<hr>";

	//**************************************************************************************************

	//serializar uma variavel
	$arr = ['Tiago', 'tiagosantos0412@gmail.com', 'tiagosantos0412@hotmail.com'];

	$str =  serialize($arr);


	echo "<br>";

	print_r(unserialize($str));
	echo "<hr>";

	//**************************************************************************************************

	//imprime uma string formatada
	$str = 'Ola meu nome e %s';
	printf($str, 'Tiago');

	echo "<hr>";

	//**************************************************************************************************
	//elimina as tags htm de um formulario

	echo "<hr>";
	echo htmlspecialchars('<hr>');

	echo "<br>";

	//echo "<script>alert('voce foi invadido')</script>";

	echo htmlspecialchars("<script>	alert('voce foi invadido')</script>");	

	echo "<hr>";

	//elimina as tags htm de um formulario
	echo strip_tags('<hr>');

	//nl2br converte uma quebra de linha console para um <br> ou quebra de linha do navegador


	//die() ou exit() interrompe a execucao do script

	//sleep gera uma pausa no codigo  sleep(4)

 ?>