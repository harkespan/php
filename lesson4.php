<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST" action="">
			<input type="text" name="inp" id="input" required />
			<input type="submit" value="OK"/>
		</form>
		<script type="text/javascript">
		function submit()
		{
			var val = document.form[0].inp.value;
			alert(val);
		}
		</script>
		<?php 
			$input = $_POST['inp'];
			$id = $_POST['inp1'];
			echo $input,$id;
		?>
	</body>
</html>