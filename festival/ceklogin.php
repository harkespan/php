<?php	
	$nim  = $_POST['nim'];
	$psw = $_POST['paswd'];

	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$rs = $DBH->query("SELECT * FROM tb_user WHERE nim='".$nim."' AND paswd='".$psw."' AND active=1");
	$jml = $rs->rowCount();
	if($jml==1)
	{
		$rs->setFetchMode(PDO::FETCH_OBJ);
		$data = $rs->row();
		session_start();
		$_SESSION['id'] = $data->id;
		$DBH->query("UPDATE tb_user SET login_time=now() WHERE id='".$data->id."'");
	}
	else {
		echo "Maaf, Anda tidak dapat menggunakan sistem ini";
	}
?>