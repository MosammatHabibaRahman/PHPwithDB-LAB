<?php
	
	require('db.php');
	
	function validate($username, $password)
	{
		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers()
	{
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function register($username,$password,$email,$type)
	{
		$con = getConnection();
		$sql = "insert into users values('','{$username}','{$password}','{$email}', '{$type}')";
		
		if(mysqli_query($con, $sql))
		{
			$result = "Registration done!";
		}
		else
		{
			$result = "Error";
		}

		return $result;
	}

?>