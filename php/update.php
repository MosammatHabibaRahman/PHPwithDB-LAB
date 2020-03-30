<?php
    session_start();

    if(isset($_POST['change']))
    {
        require('../service/functions.php');

        $id = $_SESSION['selectedUser']['id'];
        $username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		$result = update($id,$username,$password,$email,$type);
		echo $result;
    }
    else if(isset($_POST['cancel']))
    {
        header("location: ../views/view_users.php");
    }
    else {}
?>

<html>
    <a href = "../views/view_users.php">Back</a>
</html>