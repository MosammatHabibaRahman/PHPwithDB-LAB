<?php
    session_start();

	if(isset($_POST['submit']) && $_SESSION['user']['type'] == "admin")
	{
		require('../service/functions.php');

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

        $result = register($username,$password,$email,$type);
		echo $result;
    }
    else if ($_SESSION['user']['type'] != "admin")
    {
        echo "Invalid User!";
    }
    else
    {}
?>

<html>
	<a href = "../views/home.php">Back</a>
</html>
	
