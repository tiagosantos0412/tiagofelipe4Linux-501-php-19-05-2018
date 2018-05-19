<?php 

	$nome = 'Tiago Felipe dos Santos';

	$idade = 31;

	echo "Meu nome é \"{$nome}\" e tenho {$idade} anos."; //para escapar o caractere ou mostrar um caractere tipo aspas "" coloca-se barra invertida antes do caracter \" e o mesmo nao será interpretado no codigo php.

	echo "<br>";

	echo 'Meu nome é $nome e tenho $idade anos';

	echo "<hr>";

	echo 'Meu nome é: '. $nome; //o ponto (.) concatena o código

	echo "<br>";

	echo "E a minha idade é: $idade anos";
 ?>