<?php
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$item = $_GET['item'];
	if($item == 'mhs')
	{
		$table='tb_mhs';
		$param = 'nim';
		$value = $_GET['nim'];
		$location = "index.php?page=tampil";
	}
	elseif ($item=='dosen') {
		$table = '';
		$param ='';
		$value = '';
		$location ='';
	}
	

	$DBH->query("DELETE FROM $table WHERE $param='".$value."'");
	header("Location:".$location);

?>