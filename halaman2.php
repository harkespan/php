<?php
	session_start();
	if($_SESSION['is_logged']==true) {
	echo "NIM Anda di halaman ini adalah : ".$_SESSION['nim'];
?>
	<a href="logout.php">Logout</a>
<?php
	}
	else {
		header("Location:form_login.php");
	}
?>