<?php
session_start();
include "include/db.php";

$id_pesakit=$_GET['id_pesakit'];

mysql_query("delete from  maklumat_pesakit where id_pesakit='".$id_pesakit."'");
echo "<script type='text/javascript'>";
			echo "alert('Berjaya di padam !.')";
			echo "</script>";

echo "<meta http-equiv='refresh' content='0; url=home.php'>";


  ?>