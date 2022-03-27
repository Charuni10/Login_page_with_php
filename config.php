<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad-1";

$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'wad-1');
?>
