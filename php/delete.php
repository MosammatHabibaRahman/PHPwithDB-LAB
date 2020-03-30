<?php
    session_start();
    require('../service/functions.php');
    
    if($_SESSION['user']['type'] == "admin")
    {
        $id = $_GET['id'];
        $result = deleteUser($id);
        echo $result;
    }
?>

<html>
    <a href = "../views/view_users.php">Back</a>
</html>