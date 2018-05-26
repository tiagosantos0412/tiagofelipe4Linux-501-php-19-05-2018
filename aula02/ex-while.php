<?php 

	/*

		Utilizar a estrutura de repeticao while
		Imprimir na tela os numeros de 0 a 20
		Imprimir somente os numeros pares de 0 a 20
		Imprimir somente os numeros impares de 0 a 20
		Imprimirnumeros multiplos de 5 de 0 a 50

	*/

		$num = 0;

		while($num <= 20){
			echo $num.PHP_EOL;
			$num ++;
		}
		echo "Fim".PHP_EOL;

		echo 'Mostrando os numeros pares de 0 a 20'.PHP_EOL;

		$num = 0;

		while($num <= 20) {
			if($num % 2 == 0){
				echo $num.PHP_EOL;
				
			}
			$num++;
		}
		echo "Fim".PHP_EOL;


		echo 'Mostrando os numeros impares de 0 a 20'.PHP_EOL;

		$num = 0;

		while($num <= 20) {
			if($num % 2 != 0){
				echo $num.PHP_EOL;
				
			}
			$num++;
		}
		echo "Fim".PHP_EOL;

		echo 'Mostrando os numeros multiplos de 5'.PHP_EOL;

		$num = 0;

		while($num <= 50) {
			if($num % 5 == 0){
				echo $num.PHP_EOL;
				
			}
			$num++;
		}
			
 ?>