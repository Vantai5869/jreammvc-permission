<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
//		$sth = $this->db->prepare("SELECT userid, role FROM user WHERE
//				login = :login AND password = :password");
		$sth = $this->db->prepare("SELECT id, username, password FROM admin WHERE 
			username = :username AND password = :password");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
		));

		$data = $sth->fetch();
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			Session::set('isAdmin', true);
			Session::set('userid', $data['userid']);
			Session::set('adminid', $data['id']);

			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
		
	}
	
}