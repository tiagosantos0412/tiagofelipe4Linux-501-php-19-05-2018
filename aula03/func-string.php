<?php 

	//converter tudo para maiusculo

	echo "<pre>";

	$str = 'o rato roeu a roupa do rei';

	$str = strtoupper($str);

	echo $str;

	echo "<hr>";


	
	//converte a string para minusculo

	//$str = 'hauahuahuahuah HAUHAUHAUAHUAHU aahuauhauhauhauah HAUHAUHAUH';

	$str = strtolower($str);

	echo $str;

	echo "<hr>";

	//converte a primeira letra para maiusculo

	echo ucfirst($str);

	//converte cada primeira palavra para maiusculo

	echo ucwords($str);

	echo "<hr>";

	//retorna a quantidade de caracteres da string

	echo strlen($str);
	echo "<hr>";

	//substitui os valores da string conforme parametros

	echo str_replace('rato', 'cachorro', $str);
	echo "<hr>";

	//substring retorna uma parte de uma string
	
	echo substr($str, 6);

	echo "<br>";

	echo substr($str, 6, 10);
	
	echo "<hr>";

	//procura pedacos da string

	echo  strpos($str, 'rei');
	echo "<hr>";



 ?>