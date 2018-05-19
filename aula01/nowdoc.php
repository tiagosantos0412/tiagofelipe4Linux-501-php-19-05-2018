<?php 

	//nowdoc
	/*
		O nowdoc nao permite que a variavel seja interpretada pois 
		estamos utilizando aspas simples
	*/
		
	$nome = 'Tiago Felipe dos Santos';

$frase = <<< 'TEXTO'
	Meu nome é $nome e tenho 31 anos, trabalho como
	desenvolvedor PHP.
TEXTO;
		
	echo $frase;

 ?>