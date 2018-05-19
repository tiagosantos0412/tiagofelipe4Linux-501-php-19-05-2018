<?php 

	/*

	  include = inclui um outro arquivo php
	  require = requer um outro arquivo php
	  require_once ou include_once requer ou inclui um arquivo php uma única vez				

	*/
  
	echo 'index <hr> <br>';	

	require_once 'pessoa.php';
	include 'empresa.php';
	include 'trabalho.php';

	echo "Olá eu sou o {$nome} e tenho {$idade} anos e trabalho na empresa {$empresa} como {$profissao} com um salario de 
	{$salario}";

 ?>