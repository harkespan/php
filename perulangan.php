<?php
	//for looping
	// for ($i=3; $i<10 ; $i=$i+3){ 
	// 	echo $i+1," hello world<br/>";
	// }

	//while looping
	$i=0;
	while ($i<10){
		echo $i+1," hello world<br/>";
		$i++;
	}

	//do-while looping
	$i=100;
	do {
		echo $i+1," hello world<br/>";
	} while ($i<10);


	$var[1] = array('nim'=>'A11.2010.00001','nama'=>'Candra','nilai'=>'C','IPK'=>2.5);
	$var[2] = array('nim'=>'A11.2010.00001','nama'=>'Candra','nilai'=>'C','IPK'=>2.5);
	//$i=1;
	foreach ($var as $index=>$val) {
		echo 'Data ke-',$index, ' : ';
		foreach ($var[$index] as $key => $value) {
		echo $key,' : ',$value,'<br/>';
		}
	}
?>
