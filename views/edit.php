<?php
	session_start();
	require('../service/functions.php');

	if($_SESSION['user']['type'] == "admin")
	{
		$id = $_GET['id'];
		$user = getSelectedUser($id);
		$_SESSION['selectedUser'] = $user;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User Info</title>
</head>
<body>
	<h2>Edit User Info</h2>
	<form action = "../php/update.php" method = "post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value="<?=$user['username']?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?=$user['password']?>"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email" value="<?=$user['email']?>"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type" value="<?=$user['type']?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="change" value="Submit Changes"></td>
				<td><input type="submit" name="cancel" value="Cancel"></td>
			</tr>
		</table>
	</form>
</body>
</html>