<?php	
	$nim  = $_POST['nim'];
	$psw = $_POST['paswd'];
	$key = "*%&$)))*&&@@@!!!___+++computer&&^@!!@$#_++";
	$new_psw = sha1(md5($psw.$key));

	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$rs = $DBH->query("SELECT * FROM tb_user WHERE nim='".$nim."' AND paswd='".$new_psw."' AND active=1");
	$jml = $rs->rowCount();
	if($jml==1)
	{
		$rs->setFetchMode(PDO::FETCH_OBJ);
		$data = $rs->fetch();
		session_start();
		$_SESSION['id'] = $data->id;
		$_SESSION['nim'] = $data->nim;
		$_SESSION['is_logged'] = true;
		$DBH->query("UPDATE tb_user SET login_time=now() WHERE id='".$data->id."'");
		echo session_id();
		echo "Anda login dengan nim : ".$data->nim;
	}
	else {
		echo "Maaf, Anda tidak dapat menggunakan sistem ini";
	}
?>