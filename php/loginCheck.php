<?php
	session_start();

	require('../service/functions.php');
	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
			
		$user = validate($username, $password);

		if(count($user) > 0 ){
			$_SESSION['user'] = $user;
			header("location: ../views/home.php");
		}else{
			echo "invalid username/password";
		}
	}	

?>