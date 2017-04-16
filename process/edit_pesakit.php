<?php
session_start();
include "../include/db.php";


  	extract($_REQUEST);
	
	
		$sql = "UPDATE maklumat_pesakit SET nama_pesakit='$nama_pesakit',ic='$ic',alamat='$alamat',no_tel='$no_tel',jantina='$jantina' WHERE id_pesakit='$id_pesakit'";	
					//echo $sql;
			mysql_query($sql);
			

	
			echo "<script type='text/javascript'>";
			echo "alert('Berjaya di simpan !.')";
			echo "</script>";
			
			echo "<meta http-equiv='refresh' content='0; url=../senarai_maklumat_pesakit.php'>";
		
  ?>