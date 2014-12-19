<?php
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=test","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	$rs = $DBH->query("SELECT * FROM tb_mhs where nim='".$_GET['nim']."'");
	$rs->setFetchMode(PDO::FETCH_OBJ);
	$data = $rs->fetch();
?>

<div class="row">
			<div class="span12">
				<fieldset>
					<form method="post" action="action_edit_mhs.php" enctype="multipart/form-data">
						<legend>Input Form</legend>
						<input type="text" name="nim" value="<?php echo $data->nim?>" readonly><br/>
						<input type="text" name="nama" value="<?php echo $data->nama?>"><br/>
						<input type="file" name="userfile"><?php echo $data->foto?><br/>
						<input type="submit" value="Simpan">
					</form>
				</fieldset>
			</div>
		</div>