<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../bootstrap.css"/>

	<script type="text/javascript" src="localhost/silab/assets/js/jquery-1.6.2.min.js"></script>
	<style>
		.laporan{
			font-size: 1em;
		}
	</style>
</head>
<body>
<?php
	$a = array(1,2,3,4,5,6,7,8,9);
?>
	<table class="table table-bordered laporan">
		<tr>
			<td><?php echo $a[0]?></td>
			<td><?php echo $a[1]?></td>
			<td><?php echo $a[2]?></td>
		</tr>
		<tr>
			<td><?php echo $a[3]?></td>
			<td><?php echo $a[4]?></td>
			<td><?php echo $a[5]?></td>
		</tr>
		<tr>
			<td><?php echo $a[6]?></td>
			<td><?php echo $a[7]?></td>
			<td><?php echo $a[8]?></td>
		</tr>
	</table>
	<p id="par" style="color:red;font-size:12px;border:5px solid;">
		Lorem ipsum 
	</p>
	<a href="#" onclick="tampil()">Click</a>
	<script type="text/javascript">
		function tampil(){
			alert("show me");
		}
	
	</script>
</body>
</html>