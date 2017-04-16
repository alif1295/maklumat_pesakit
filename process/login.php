<?php
session_start();
include "../include/db.php";

  		$nama=$_POST['nama'];	
		$katalaluan=$_POST['katalaluan'];	

		$nama=mysql_real_escape_string($nama); 
		$katalaluan=mysql_real_escape_string($katalaluan);
		
		//$pwd=md5($password);
		$sql ="SELECT * FROM pengguna WHERE nama='$nama' and katalaluan='$katalaluan'";
		//echo $sql;exit();
		$check=mysql_query($sql);
		//echo $check;exit();
		$rows=mysql_num_rows($check);
		
		if($rows>0){
			$result = mysql_fetch_array($check);
			$id_nama=$result['nama'];			
			$id=$result['id'];
			
			
			$_SESSION['nama']=$nama;
			$_SESSION['id']=$id;
			
			echo "<meta http-equiv='refresh' content='0; url=../home.php'>";
			//header('Location: admin_home.php');
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Maaf !.Username atau password tidak tepat.')";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
			//header('Location: index.php');
		}
		

  ?>