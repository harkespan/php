<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" href="../bootstrap.css" />
	</head>
	<body>
		<div class="row">
			<div class="span12">
				<fieldset>
					<form method="post" action="dbdemo/simpan.php" enctype="multipart/form-data">
						<legend>Input Form</legend>
						<input type="text" name="nim" required><br/>
						<input type="text" name="nama" required><br/>
						<input type="file" name="userfile"><br/>
						<input type="submit" value="Simpan">
					</form>
				</fieldset>
			</div>
		</div>
	</body>
</html>