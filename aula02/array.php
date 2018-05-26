<?php 

	/*
		
		Array

		[0] = valor1
		[1] = valor2
		
	*/
		echo "<pre>";

		//$arr = ['valor1', 'valor2'];

		//echo nao imprime os valores

		$arr = array('Tiago', 31, 'tiagosantos0412@gmail.com');

		echo $arr[0].'<br>'; 
		echo $arr[1].'<br>';
		echo $arr[2].'<br';

		print_r($arr); //funciona
		echo "<br>";
		var_dump($arr); //funciona

		echo "<br>";

		echo $arr[0];

		echo "<hr>";

		for ($i=0; $i < 3; $i++) { 
			echo $arr[$i].' ';
		}

 ?>