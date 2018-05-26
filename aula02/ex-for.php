<?php 
	
	/*

		Utilizar a estrutura de repeticao for
		Imprimir na tela os numeros de 0 a 20
		Imprimir somente os numeros pares de 0 a 20
		Imprimir somente os numeros impares de 0 a 20
		Imprimirnumeros multiplos de 5 de 0 a 50

	*/

	for($i=0; $i<=20;$i++){
		echo $i.PHP_EOL;
	}


	echo 'Mostrando os numeros pares de 0 a 20'.PHP_EOL;

	for($i=0; $i<=20;$i++){

			echo ($i % 2 == 0) ? $i.PHP_EOL : null;
	}	

	echo 'Mostrando os numeros impares de 0 a 20'.PHP_EOL;

	for($i=0; $i<=20;$i++){

		if($i % 2 != 0){;
			echo $i.PHP_EOL;
		}
	}

	echo 'Mostrando os numeros multiplos de 5'.PHP_EOL;

	for($i=0; $i<=50;$i++){

		if($i % 5 == 0){;
			echo $i.PHP_EOL;
		}
	}
 ?>