<?php
	if(isset($_POST['submit']))
	{
		require('../service/functions.php');

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		$result = register($username,$password,$email,$type);
		echo $result;
	}
	
