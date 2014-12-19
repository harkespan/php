<?php
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$rs = $DBH->query("SELECT * FROM tb_mhs WHERE nim='".$_GET['nim']."'");
	$rs->setFetchMode(PDO::FETCH_OBJ);
	$data = $rs->fetch();
	if($data->foto=='')
			{
				$foto = 'ga ada';
			}
			else {
				$foto = "<img src='uploads/$data->foto'>";
			}
	echo "NIM : ".$data->nim."<br/>";
	echo "Nama : ".$data->nama."<br/>";
	echo "Fakultas : ".substr($data->nim,0,1)."<br/>";
	echo "Jurusan : ".substr($data->nim,0,3)."<br/>";
	echo "Foto : ".$foto;
?>