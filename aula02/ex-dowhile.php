<?php 

	/*

		Utilizar a estrutura de repeticao dowhile
		Imprimir na tela os numeros de 0 a 20
		Imprimir somente os numeros pares de 0 a 20
		Imprimir somente os numeros impares de 0 a 20
		Imprimirnumeros multiplos de 5 de 0 a 50

	*/


	$num = 0;
	
	do{
		echo $num.PHP_EOL;
		$num ++;
	}while($num <= 20);	


	echo 'Mostrando os numeros pares de 0 a 20'.PHP_EOL;


	$num = 0;

	do{
		if($num % 2 == 0){
			echo $num.PHP_EOL;		
		}
		$num++;
	}while($num <= 20);	

	echo "Fim".PHP_EOL;

	echo 'Mostrando os numeros impares de 0 a 20'.PHP_EOL;
	

	$num = 0;

	do{
		if($num % 2 != 0){
			echo $num.PHP_EOL;		
		}
		$num++;
	}while($num <= 20);	

	echo "Fim".PHP_EOL;

	echo 'Mostrando os numeros multiplos de 5'.PHP_EOL;

	$num = 0;

	do{
		if($num % 5 == 0){
			echo $num.PHP_EOL;
		}
		$num++;
	}
	echo "Fim".PHP_EOL;

 ?>