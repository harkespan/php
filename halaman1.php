<?php
	session_start();
	if($_SESSION['is_logged']!=true)
	{
		header("Location:form_login.php");
		exit;
	}
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	echo $_SESSION['nim']," login dengan IP ",$_SERVER['REMOTE_ADDR'];
	$DBH->query("INSERT INTO system_log (author_id,action,action_time,host) VALUES
		('".$_SESSION['id']."','akses ke halaman1.php',now(),'".$_SERVER['REMOTE_ADDR']."')");

?>
