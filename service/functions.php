<?php
	require('db.php');

	function countRows($result)
	{
		$count = mysqli_num_rows($result);
		return $count;
	}

	function deleteUser($id)
	{
		$con = getConnection();
		$sql = "delete from users where id = {$id}";

		if(mysqli_query($con, $sql))
		{
			$result = "User successfully removed!";
		}
		else
		{
			$result = "Error";
		}

		return $result;
	}
	
	function fetch($result)
	{
		$count = countRows($result);
		$i=0;
		while($i<$count)
		{
			$rows[$i] = mysqli_fetch_assoc($result);
			$i++;
		}

		if($count>0)
		{
			return $rows;
		}
	}

	function getAllUsers()
	{
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getSelectedUser($id)
	{
		$con = getConnection();
		$sql = "select * from users where id = {$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function register($username,$password,$email,$type)
	{
		$con = getConnection();
		$sql = "insert into users values(null,'{$username}','{$password}','{$email}', '{$type}')";
		
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

	function searchUser($txt)
	{
		$con = getConnection();
		$sql = "select * from users where username like '{$txt}%'";
		$result = mysqli_query($con, $sql);
		
		return $result;
	}

	function update($id,$username,$password,$email,$type)
	{
		$con = getConnection();
		$sql = "update users set username = '{$username}', password = '{$password}', email = '{$email}', type = '{$type}' where id = $id";
		
		if(mysqli_query($con, $sql))
		{
			$result = "User info successfully updated!";
		}
		else
		{
			$result = "Error";
		}

		return $result;
	}

	function validate($username, $password)
	{
		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}
?>