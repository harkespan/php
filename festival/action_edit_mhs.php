<?php
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tf = $_FILES['userfile']['tmp_name'];
	$real = $_FILES['userfile']['name'];

	$rs = $DBH->query("SELECT * FROM tb_mhs where nim='".$nim."'");
	$rs->setFetchMode(PDO::FETCH_OBJ);
	$data = $rs->fetch();
	unlink('../dbdemo/uploads/'.$data->foto);
	move_uploaded_file($tf, '../dbdemo/uploads/'.$real);

	$DBH->query("UPDATE tb_mhs SET nama='".$nama."',foto='".$real."' WHERE nim='".$nim."'");

	header("Location:index.php?page=tampil");


?>