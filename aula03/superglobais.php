<?php 

	echo "<pre>";

	//print_r($_SERVER);

	//$_ENV['bd'] = 'dev';

	//print_r($_ENV);

	//*********************************************************************************************************

	/*
		Passando parametros via $_GET para o servidor
	 	.php?tiago dois parametros 
		.php?nome=Tiago&email=tiagosantos0412@gmail.com
	
	print_r($_GET);

	if(isset($_GET['nome'])){
		echo $_GET['nome'];
	}

	*/


	//formulario para testes
	/*
	echo '<form method="POST">
				<input type="text" name="nome">
				<button type="submit">OK</button>
		  </form>';
	*/


	//RECEBER DADOS VIA $_POST
	//print_r($_POST);

 
	//********************************************************************************************************* 

 

 	//TRABALHANDO COM SESSAO
 	//session_start();

 	//$_SESSION['nome'] = 'Tiago';

 	//print_r($_SESSION);


	//*********************************************************************************************************

 
	//trabalhando com cookies
	//setcookie('cor', 'preto', strtotime('1 day'));
	//print_r($_COOKIE);

	//*********************************************************************************************************
 
 	//trabalhando com o $_REQUEST
 	//print_r($_REQUEST);
	
	//*********************************************************************************************************

	//enviando arquivos via formulario	  
	/*echo '<form method="POST" enctype="multipart/form-data">
				<input type="text" name="nome">
				<input type="file" name="img">
				<button type="submit">OK</button>
		  </form>';

	print_r($_POST);	
	echo "<hr>";  
	print_r($_FILES);
	*/

	$nome = '4Linux';

	print_r($GLOBALS);

  ?>

