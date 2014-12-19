<?php
	$mahasiswa = array('nim'=>'A11.2010.00001',
						'nama'=>'Andi',
						'alamat'=>'Semarang',
						'status'=>'mangkir');

	if($mahasiswa['status']=='aktif')
	{
		//echo "TRUE";
		echo $mahasiswa['status'];
	}
	else
		{
			echo "FALSE";
		}

	$a=1;
	if($a==='1')
	{
		echo "TRUE";
	}
	else
		echo "FALSE";
?>