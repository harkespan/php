<?php
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$nf =  $_FILES['userfile']['tmp_name'];
	$real = $_FILES['userfile']['name'];

	move_uploaded_file($nf, 'uploads/'.$_FILES['userfile']['name']);
	// echo $nim,$nama;

	$DBH->query("INSERT INTO tb_mhs (nim,nama,foto) VALUES ('".$nim."','".$nama."','".$real."')");


	
?>
<!-- <script>
	alert('Data sudah disimpan');
	history.go(-1);
</script>-- >