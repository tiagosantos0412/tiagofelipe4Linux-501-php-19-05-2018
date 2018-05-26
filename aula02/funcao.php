<?php 

	//sem parametros

	function olaMundo(){
		echo "Ola mundo!<br>";
		echo "<hr>";
	}

	olaMundo();

	//com parametros

	function olaUsuario($nome){
		echo 'Ola '. $nome;
		echo "<hr>";
	}

	function olaUsuario2($nome = ''){
		echo 'Ola '. $nome;
		echo "<hr>";
	}

	olaUsuario('Tiago');
	olaUsuario2();

	//tipando parametros

	function soma(int $num1, int $num2){
		echo $num1 + $num2 . '<br>';
		echo "<hr>";
	}

	soma(5, 5);


	//com retorno

	function verifcadorMaiorIdade(int $idade) : bool{
		if($idade >= 18){
			return 'true';
		}else {
			return 'false';
		}
		echo "<hr>";
	}

	


	$var = verifcadorMaiorIdade(31);

	var_dump($var);

	echo "<hr>";

	function negrito(string $txt) : string {
		return '<strong>'.$txt.'<strong>';
	}
	
	echo negrito('4Linux');

	echo "<hr>";

	$msg = '4linux - PHP';//vaiavel global
	

	function italico(){
		//utilizando uma variavel de escopo global
		global $msg;
		echo '<i>'. $msg .'<i>';
	}

	italico();

	echo "<hr>";

 ?>