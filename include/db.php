<?php

//error_reporting(E_ALL);
error_reporting(0);

//time zone
date_default_timezone_set('Asia/Kuala_Lumpur');
//Report all errors
//error_reporting(0);

$dbhost = 'localhost';
$dbusername = "root";
$dbpasswd = "";
$database_name = "maklumat_pesakit";


$connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
        or die ("Couldn't connect to host." . mysql_error());

$db = mysql_select_db("$database_name", $connection)
        or die("Couldn't select database.". mysql_error());
?>