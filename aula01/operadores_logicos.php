<?php 
	
	echo "<pre>";

	echo "<hr>";

	echo "Operador AND &&.". "<br>";
	echo "Operador AND.";
	var_dump(true AND true);
	echo "Operador &&.";
	var_dump(true && false);
	echo "False AND true.";
	var_dump(false && true);
	echo "False AND False.";
	var_dump(false && false);
	echo "<hr>";


	echo "Operador OR ||.". "<br>";
	var_dump(true || true);	
	var_dump(true || false);
	var_dump(false || true);
	var_dump(false || false);
	echo "<hr>";


	echo "Operador XOR.". "<br>";
	var_dump(true XOR true);	
	var_dump(true XOR false);
	var_dump(false XOR true);
	var_dump(false XOR false);
	echo "<hr>";

	echo 'Operador de negacao ! <br>';
	echo '!false ';
	var_dump(!false);
	echo '!true ';
	var_dump(!true);
	echo "<hr>";
 ?>