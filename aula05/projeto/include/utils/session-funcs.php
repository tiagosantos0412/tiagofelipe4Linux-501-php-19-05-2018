<?php 

	session_start();

	function initSessionUser(array $user)
	{
		$_SESSION['user'] = $user;
		$_SESSION['logged'] = true;
	}

	function isLogged()
	{
		// if(isset($_SESSION['logged'])){
		// return true
		// } else {
		//	return false
		// }
		return $_SESSION['logged'] ?? false;
	}

	function logout()
	{
		session_destroy();
	}

	function getUserLogged()
	{
		return $_SESSION['user'] ?? false;
	}


 ?>