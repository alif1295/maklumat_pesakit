<?php
session_start();
include "../include/db.php";

  	extract($_REQUEST);
	
		$sql ="SELECT * FROM pengguna WHERE nama='$nama'";
		 
		$check=mysql_query($sql);
		 
		$rows=mysql_num_rows($check);
		
		if($rows>0){
			
			echo "<script type='text/javascript'>";
					echo "alert('Id nama telah wujud !.')";
					echo "</script>";
					
					 
					echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
		}else{
	
	
			$sql = "INSERT INTO pengguna(nama,katalaluan) ";
			
			$sql .= " VALUES ('$nama','$katalaluan')";	
			//echo $sql;
			mysql_query($sql);
			
			echo "<script type='text/javascript'>";
			echo "alert('Berjaya di simpan !.')";
			echo "</script>";
			
			echo "<meta http-equiv='refresh' content='0; url=../daftar.php'>";
		}
  ?>