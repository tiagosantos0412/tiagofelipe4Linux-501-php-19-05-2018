<?php 
	
	$num1 = 10;
	$num2 = '10';

	echo "<pre>";

	var_dump($num1);
	var_dump($num2);

	echo 'Verificar se é igual =='; 
	echo "<br>";
	var_dump($num1 == $num2);

	echo 'Verificar se é diferente !=';
	echo "<br>";
	var_dump($num1 != $num2);

	echo 'Verificar se é identico ===';
	echo "<br>";
	var_dump($num1 === $num2);

	echo 'Verificar se nao é identico !==';
	echo "<br>";
	var_dump($num1 !== $num2);

	echo 'Verificar se é maior >';
	echo "<br>";
	var_dump($num1 > $num2);

	echo 'Verificar se é maior ou igual >=';
	echo "<br>";
	var_dump($num1 >= $num2);

	echo 'Verificar se é menor < ';
	echo "<br>";
	var_dump($num1 < $num2);

	echo 'Verificar se é menor ou igual <= ';
	echo "<br>";
	var_dump($num1 <= $num2);

	echo "<hr>";
	echo 'operador spaceship';
	echo "<br>";

	//$<=> $b

	var_dump(1 <=> 0);
	var_dump(1 <=> 1);
	var_dump(1 <=> 2);
 ?>