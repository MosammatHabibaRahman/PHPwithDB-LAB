<?php
    session_start();
    echo $_SESSION['user']['type'];

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
    else
    {}
?>

<html>
	<a href = "../views/login.html">Login</a>
</html>
	
