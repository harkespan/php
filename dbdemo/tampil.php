<?php
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$rs = $DBH->query("SELECT * FROM tb_mhs where nim!='' AND nama!=''");
	// print_r($rs);
	$jml = $rs->rowCount();//mencaari jumlah baris dalam tabel
	
	if($jml==0)
	{
		echo "Data belum tersedia";
	}
	else {
		$i=1;
		$rs->setFetchMode(PDO::FETCH_OBJ);
?>
	<table border="1">
	<tr>
		<td>NIM</td>	
		<td>Nama</td>	
		<td>Fakultas</td>	
		<td>Jurusan</td>	
	</tr>	
<?php		

		while($data=$rs->fetch()){
			if($data->foto=='')
			{
				$foto = 'ga ada';
			}
			else {
				$foto = "<img src='uploads/$data->foto'>";
			}
		?>
		<tr>
			<td><a href="index.php?page=detail&nim=<?php echo $data->nim?>"><?php echo $data->nim?></a></td>
			<td><?php echo $data->nama?></td>
			<td><?php echo substr($data->nim,0,1)?></td>
			<td><?php echo substr($data->nim,0,3)?></td>
		</tr>
		<?php
			$i++; 
		}
?>
	</table>
<?php
	}
?>