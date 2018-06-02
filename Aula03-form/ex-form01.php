	<form method="POST">
		<p>Numero 1: <input type="number" name="numero1"></p>
		<p>Numero 2: <input type="number" name="numero2"></p>
		<input type="submit" name="calcular" value="CALCULAR">
		
	</form>


<?php 

	/*
		Claculadora
		Receba dois numeros atraves de um formulario.
		exibir a resposta:
		-Soma dos dois numeros
		-Subtracao dos dois numeros
		-Multiplicacao dos dois numeros
		-divisiao dos dois numeros
	*/


	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];

	if (!empty($numero1) && !empty($numero2)) {
		echo 'A soma e: '. ($numero1 + $numero2) .'<br>';
		echo 'A subtracao e: '. ($numero1 - $numero2) .'<br>';
		echo 'A multiplicacao e: '. ($numero1 * $numero2) .'<br>';
		echo 'A divisao e: '. ($numero1 / $numero2) .'<br>';
	}


 ?>