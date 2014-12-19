<?php
	$mahasiswa = array('nama'=>'Joko','nama2'=>'Jono','nama3'=>'Andi','nama4'=>'Budi');
?>
<table border=1>
	<tr>
		<td>No</td>
		<td>Nama</td>
	</tr>
	<?php
		$i = 1;
		foreach ($mahasiswa as $key => $value) {
	?>
		<tr>
			<td><?php echo "Index ". $key?></td>
			<td><?php echo "Nama mahasiswa ". $value?></td>
		</tr>
	<?php
		$i++;
		}
	echo "<p>Hello World</p>";
	?>
</table>
