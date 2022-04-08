<?php
    include "../config/database.php";

    $uname = $_POST['username'];
    $passwd = $_POST['passwd'];
    $cpasswd = $_POST['cpasswd'];

    if($passwd==$cpasswd)
    {
        $psw = password_hash($passwd,PASSWORD_DEFAULT);

	    $db->query("INSERT INTO users (username,passwd) VALUES ('".$uname."','".$psw."')");
        header("Location: registration.php?msg=success");  	
    }
    else
    {
        header("Location: registration.php?msg=not-match");
    }
?>
