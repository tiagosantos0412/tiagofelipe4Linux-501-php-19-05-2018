<form method="POST">
		<p>Nome: <input type="text" name="nome"></p>
		<p>Idade: <input type="number" name="idade" min="0"></p>
		<p>E-mail: <input type="email" name="email"></p>
		<p>Senha: <input type="password" name="senha"></p>
		<p>Cor: <input type="color" name="cor"></p>
		<p>
			Sexo: <input type="radio" name="sexo" value="M">M || 
				  <input type="radio" name="sexo" value="F">F	
		</p>
		<p>Cursos: 
			<input type="checkbox" name="cursos[]" value="PHP">PHP
			<input type="checkbox" name="cursos[]" value="Linux">Linux
			<input type="checkbox" name="cursos[]" value="Front-End">Front-End
		</p>
		<input type="hidden" name="token" value="abc123">
		<p>Range: 
			<input type="range" name="range" min="0" max="50"></p>
		<p>
		<input type="reset">
		<input type="submit" value="Enviar">
	</p>
	</form>

<?php 
	echo "<pre>";
	print_r($_POST);

 ?>