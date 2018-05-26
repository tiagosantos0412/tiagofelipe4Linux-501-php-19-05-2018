<?php 

//funcao vai esperar um argumento passado por referencia que esta alocado em algum espaco da memoria

	function adicionar(&$fruta){
		++$fruta;

	}

	$laranjas = 5;

	echo $laranjas. '<br>';
	++$laranjas;
	echo $laranjas. '<br>';
	adicionar($laranjas);
	echo $laranjas. '<br>';
	++$laranjas;
	echo $laranjas. '<br>';
 ?>