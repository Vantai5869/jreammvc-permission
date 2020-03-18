<?php

class Auth
{
	public static function handleLogin()
	{
		@session_start();
		$logged = $_SESSION['loggedIn'];
		if ($logged == false)
		{
			session_destroy();
			header('location: ../login');
			exit;
		}

		/*Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: '. URL . 'login');
			exit;
		}*/
	}
	public static function isLoginAdmin()
	{
		@session_start();
		$logged = $_SESSION['loggedIn'];
		$isAdmin = $_SESSION['isAdmin'];
		if ($logged == false||$isAdmin == false)
		{
			session_destroy();
			header('location: ../login');
			exit;
		}
	}


}