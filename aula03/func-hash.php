<?php 

	//criptografando com md5

	echo md5('123456');

	echo "<br>";

	echo md5('123456');

	echo "<hr>";

	//criptografando com sha1

	echo sha1('123456');

	echo "<br>";

	echo sha1('123456');

	echo "<hr>";

	//criptografando escolhendo o hash

	echo hash('md5','123456');

	echo "<br>";

	echo hash('sha1','123456');

	echo "<hr>";

	//criptografando com o crypt

	echo crypt('123456', 'rl');

	echo "<br>";

	echo crypt('123456', 'rl');

	echo "<hr>";

	//criptografando com passoword_hash
	echo password_hash('123456',PASSWORD_BCRYPT);
	echo '<br>';
	echo password_hash('123456',PASSWORD_BCRYPT);

	echo '<hr>';

	$senha = '123456';

	$cript = password_hash($senha, PASSWORD_BCRYPT);

	//verificar se a senha esta valida
	if (password_verify($senha, $cript)) {
		echo 'Esta Logado';
	}

	


 ?>