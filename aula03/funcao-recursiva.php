<?php 

	//fatorial

	function fatorial($x){
		return $x * fatorial($x - 1);
		
	}

	echo fatorial(4);

	/*

		//Função recursiva que calcular o fatorial de um número
		function fatorial($numero){
			if($numero <= 1){
				return $numero;
			}else{
				return $numero * fatorial($numero - 1);
			}
		}
		//4*3*2 = 24
		echo fatorial(4);

	*************************************************************************************************************

		function fatorial ($n) {
	    	return  $n > 1 ? $n * fatorial($n - 1) : 1;
		};
		echo fatorial(4);

	*/

	
 ?>