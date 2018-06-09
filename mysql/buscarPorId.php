<?php
require 'conexao.php';
	
	$id = 5;

	$query = "SELECT * FROM usuarios WHERE id={$id}";

	echo "<pre>";

	echo $query;

	echo "<br>";

	$result = mysqli_query($con, $query);

	$data = mysqli_fetch_assoc($result);

	print_r($data);

?>
<?php if($data): ?>
	<p>Nome: <?= $data['nome'] ?></p>
	<p>Email: <?= $data['email'] ?></p>
	<p>Senha: <?= $data['senha'] ?></p>
<?php else: ?>
	<p>Nao foi possivel encontrar usuarios com este id.</p>
<?php endif; ?>