<?php
	$string = "rahasia";
	$key = "*%&$)))*&&@@@!!!___+++computer&&^@!!@$#_++";
	$enkripsi_md5 = sha1(md5($string.$key));
	$enk = md5(md5($string));
	echo "String : ".$string;
	echo "<br/> key md5 : ".$enk;
	echo "<br/> Enkripsi sha1,md5,dan key : ".$enkripsi_md5;
	
?>