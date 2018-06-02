<form method="POST">
	<p>Numero 1: <input type="number" name="numero1"></p>
	<p>Numero 2: <input type="number" name="numero2"></p>
		<select name="op">
			
			<option value="somar">Somar</option>
			<option value="subtrair">Subtrair</option>
			<option value="multiplicar">Multiplicarar</option>
			<option value="dividir">Dividir</option>
		</select>
	<input type="submit" name="calcular" value="CALCULAR">
	
</form>


<?php 

	if (!empty($_POST)) {
		$n1 = $_POST['numero1'];
		$n2 = $_POST['numero2'];
		$op = $_POST['op'];

		switch ($op) {
			case 'somar':
				echo 'N1 + N2 = '. ($n1 + $n2);
				break;
			case 'subtrair':
				echo 'N1 - N2 = '.($n1 - $n2);
				break;
			case 'multiplicar':
				echo 'N1 * N2 = '.($n1 * $n2);
				break;
			case 'dividir':
				echo 'N1 / N2 = '.($n1 / $n2);
				break;
			default:
				echo "Opcao invalida";
			break;
			
		}
	}


 ?>