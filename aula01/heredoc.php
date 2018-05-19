<?php 

	//heredoc

	$nome = 'Tiago Felipe dos Santos';

$frase = <<< TEXTO
	Meu nome é $nome e tenho 31 anos, trabalho como
	desenvolvedor de PHP.
TEXTO;
	
	echo $frase;

 ?>