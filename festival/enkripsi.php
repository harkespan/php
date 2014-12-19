<?php
	$string = "password=rahasia";
	$key = "*%&$)))*&&@@@!!!___+++computer";
	$enkripsi_md5 = sha1(md5($string.$key));
	echo "String : ".$string;
	echo "<br/> key : ".$key;
	echo "<br/> Enkripsi : ".$enkripsi_md5;
	
?>