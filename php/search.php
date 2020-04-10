<?php
    require('../service/functions.php');
    
    $searchtxt = $_POST['searchtxt'];
    $result = searchUser($searchtxt);
    $rows = fetch($result);
    $c = countRows($result);

    if($c>0)
    {
        $data = "<table border=1><tr><td>ID</td><td>Username</td><td>Password</td><td>Email</td><td>Type</td></tr>";
        for($i=0; $i<$c; $i++)
        {
            
            $data .= "<tr>
                <td>{$rows[$i]['id']}</td>
                <td>{$rows[$i]['username']}</td>
                <td>{$rows[$i]['password']}</td>
                <td>{$rows[$i]['email']}</td>
                <td>{$rows[$i]['type']}</td>
            </tr>";
        }
        $data .= "</table>";
        echo $data;
    }
    else
    {
        echo "Sorry, No users found with this search.";
    }
?>