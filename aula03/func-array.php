<?php 

	//filtrando array
	
	echo "<pre>";

	print_r(array_filter([1,2,3,4,5,6], 
		function($num){
			if($num % 2 == 0){
				return $num;
			}
	}));

	echo "<hr>";

	//*************************************************************************************************

	//quantidade de valores em um array
	echo count([true, 'Tiago', 4]);
	echo "<hr>";

	//*************************************************************************************************

	//procura um determinado valor em um array
	$arr = ['Tiago', 'Jose', 'Maria'];
	$pos = array_search('Jose', $arr);
	echo $pos;
	echo "<br>";

	$pos = array_search('Joao', $arr);
	echo $pos;
	echo "<hr>";

	//*************************************************************************************************

	//procura um determinado valor em um array e retorna falso ou verdadeiro

	var_dump(in_array('Jose', $arr));
	var_dump(in_array('Joao', $arr));
	echo "<hr>";

	//*************************************************************************************************

	//procura a chave no array e retorna verdadeiro ou falso
	$arr = ['nome' => 'Tiago', 'idade' => 31];
	var_dump(array_key_exists('nome', $arr));
	var_dump(array_key_exists('email', $arr));
	echo "<hr>";

	//*************************************************************************************************

	//ordena um array
	$arr = [1,5,7,6,3,4,2];

	print_r($arr);
	sort($arr);
	echo "<br>";
	print_r($arr);
	echo "<hr>";

	//*************************************************************************************************

	//recebe um array e converte para string
	$arr = [2,6,2018];
	echo implode('/', $arr);
	echo "<br>";
	//recebe uma string e convrete para array
	$str = '02/06/2018';
	print_r(explode('/', $str));

	echo "<br>";

	if (!in_array('name', $arr)) {
		echo 'Faltando chave de nome';
	}
	echo "<hr>";
	
 ?>

