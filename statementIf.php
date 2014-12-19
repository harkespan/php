<?php
	$kode='A';
?>
	<code>
	$kode='ABC';
	</code>
	<br/>	
<?php
	echo "Panjang String ",strlen($kode),"<br/>";
	$pstring = strlen($kode);
	if($pstring==1)
	{
		echo "Doing this";
	}
	else
	{
		if($pstring==2)
		{
			echo "Doing another";
		}
		elseif ($pstring==3) {
			echo "Doing another activity";
		}
	}
?>