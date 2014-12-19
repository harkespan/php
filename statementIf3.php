<?php
	$nim='A11.2000.00001';
	$fak = substr($nim,0,1);
	switch ($fak) {
		case 'A':
		echo "Fakultas Ilmu Komputer";
			break;
		
		default:
		echo "Fakultas Luar Udinus";
			break;
	}
	echo strlen($nim);
?>